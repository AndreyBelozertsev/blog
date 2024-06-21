<?php
namespace Services\Telegraph;


use Carbon\Carbon;
use ReflectionMethod;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use DefStudio\Telegraph\DTO\Chat;
use DefStudio\Telegraph\DTO\User;
use Domain\Product\Models\TgTarif;
use Illuminate\Support\Collection;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use Services\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\InlineQuery;
use DefStudio\Telegraph\Keyboard\Button;
use Domain\Order\Models\PaymentRegistry;
use Domain\Telegram\Models\Subscription;
use Services\Telegraph\DTO\ChatJoinQuery;
use DefStudio\Telegraph\DTO\CallbackQuery;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Services\Telegraph\Models\TelegraphBot;
use Services\Telegraph\DTO\PreCheckoutQuery;
use Services\Telegraph\Models\TelegraphChat;
use Services\Telegraph\DTO\SuccessfulPayment;
use DefStudio\Telegraph\Exceptions\TelegramWebhookException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Services\Telegraph\Facade\TelegraphCustom as TelegraphCustomFacade;


class BotWebhookHandler
{

    protected TelegraphBot $bot;
    protected TelegraphChat $chat;

    protected int $messageId;
    protected int $callbackQueryId;

    protected Request $request;
    protected Message|null $message = null;
    protected CallbackQuery|null $callbackQuery = null;

    protected Collection $data;

    protected Keyboard $originalKeyboard;

    public function __construct()
    {
        $this->originalKeyboard = Keyboard::make();
    }

    public function handle(Request $request, \DefStudio\Telegraph\Models\TelegraphBot $bot): void
    {
        Log::build(['driver' => 'single', 'path' => storage_path('logs/telegram-webhook.log')])->info($request);

        $this->bot = $bot;

        $this->request = $request;

        if ($this->request->has('message')) {
            /* @phpstan-ignore-next-line */
            $this->message = Message::fromArray($this->request->input('message'));
            $this->handleMessage();

            return;
        }

        if ($this->request->has('edited_message')) {
            /* @phpstan-ignore-next-line */
            $this->message = Message::fromArray($this->request->input('edited_message'));
            $this->handleMessage();

            return;
        }

        if ($this->request->has('channel_post')) {
            /* @phpstan-ignore-next-line */
            $this->message = Message::fromArray($this->request->input('channel_post'));
            $this->handleMessage();

            return;
        }


        if ($this->request->has('callback_query')) {
            /* @phpstan-ignore-next-line */
            $this->callbackQuery = CallbackQuery::fromArray($this->request->input('callback_query'));
            $this->handleCallbackQuery();
        }

        if ($this->request->has('inline_query')) {
            /* @phpstan-ignore-next-line */
            $this->handleInlineQuery(InlineQuery::fromArray($this->request->input('inline_query')));
        }

        if ($this->request->has('chat_join_request')) {
            /* @phpstan-ignore-next-line */

            $this->handleChatJoinQuery(ChatJoinQuery::fromArray($this->request->input('chat_join_request')));
        }

        if ($this->request->has('pre_checkout_query')) {
            /* @phpstan-ignore-next-line */
            $this->handlePreCheckoutQuery(PreCheckoutQuery::fromArray($this->request->input('pre_checkout_query')));
        }

    }

    protected function handleChatJoinQuery(ChatJoinQuery $chatJoinQuery): void
    {
        $chat_id = $chatJoinQuery->chat()->id();
        $tg_user_id = $chatJoinQuery->from()->id();


        $telegraphChat = TelegraphChat::with('client')->whereHas('client', function($q) use($tg_user_id){
            $q->where('telegram_id', $tg_user_id)
                ->whereHas('subscriptions', function($q){
                    $q->activeItem(); 
                });
            })->first();

        if(!$telegraphChat || !($chat_id == env('TG_CHANEL'))){
            return;
        }


        TelegraphCustomFacade::approveChatJoin( $chat_id, $tg_user_id)->send();

        $telegraphChat->html("Ваша заявка одобрена!"
        )->keyboard(function(Keyboard $keyboard) use($chatJoinQuery){
            return $keyboard
                ->button('В канал')->url(env('TG_CHANEL_INVITE_LINK'));
        })->send();
    }


    protected function handlePreCheckoutQuery(PreCheckoutQuery $preCheckoutQuery): void
    {
        $pre_checkout_query_id = $preCheckoutQuery->id();
        $invoice_payload = $preCheckoutQuery->invoice_payload();
        $telegram_id = $preCheckoutQuery->from()->id();
        $ok = false;
        $error_message = 'Указанная транзакция не найдена';
        if(PaymentRegistry::where('invoice_payload', $invoice_payload)
            ->where('telegram_id', $telegram_id)
            ->where('status', false)
            ->first()   )
        {
            $ok = true;
            $error_message = '';
        }

        TelegraphCustomFacade::answerPreCheckoutQuery( $pre_checkout_query_id, $ok, $error_message )->send();
    
    }

    protected function handleSuccessfulPayment(SuccessfulPayment $successfulPayment): void
    {

        if(!$payment_registry = PaymentRegistry::where('invoice_payload', $successfulPayment->invoice_payload())
            ->where('status', false)
            ->with('client')
            ->with('tarif')
            ->first()   )
        {
            return;
        }

        $payment_registry->update([
            'status' => true,
            'telegram_payment_charge_id' => $successfulPayment->telegram_payment_charge_id(),
            'provider_payment_charge_id' => $successfulPayment->provider_payment_charge_id(),
        ]);

        $client_id = $payment_registry->client->id;

        $subscription = Subscription::where('client_id', $client_id)->where('status', 1)->first();
        if($subscription){
            Subscription::create([
                'status' => 1,
                'client_id' => $client_id,
                'expaire_at' => Carbon::parse($subscription->expaire_at)->addDays($payment_registry->tarif->days)
            ]);
            $subscription->update(['status' => 0]);
        }else{
            Subscription::create([
                'status' => 1,
                'client_id' => $client_id,
                'expaire_at' => Carbon::parse(NOW())->addDays($payment_registry->tarif->days)
            ]);
        }



        $this->chat->message("Оплата прошла успешно
        \nОтправляем Вам приглашение на закрытый канал, заявки принимаются автоматически!")
        ->keyboard(function(Keyboard $keyboard){
            return $keyboard
                ->button('Перейти в канал')->url(env('TG_CHANEL_INVITE_LINK'));
        })
        ->send();

    }
    
    public function start(): void
    {
        $this->setClient();

        $this->chat->html("Добро пожаловать!
                \n\nЭто бот канала Александра Жука Papazhuk 
                \nНа канале Вы найдете: 
                \n- авторские фото для заставки на ваши смартфоны
                \n- эксклюзивные длинные видео из океана в оригинальном качестве 
                \n- технические, бытовые видео, раскрывающие специфику профессии моряк, жизни на судне, работы механиков и других специалистов 
                \n- подборки фото и видео для ваших соц.сетей,  креативных идей и проектов
                \n- розыгрыши подарков
                \n- возможность поддержать мои новые проекты для вас"
            )
            ->keyboard(function(Keyboard $keyboard){
                $keyboard
                    ->row([
                        Button::make('Тарифы')->action('pay'),
                    ]);
                if( Subscription::activeItem($this->chat->client->id)->first() ){
                    $keyboard
                    ->row([
                        Button::make('Окончание подписки')->action('expire')
                    ]);
                }

                return $keyboard;
            })->send();
    }


    public function pay(): void
    {
        $tarifs = TgTarif::active()->get();
        $this->chat->message('Выберите тариф:')
            ->keyboard(function(Keyboard $keyboard) use($tarifs){
                foreach($tarifs as $tarif){
                    $keyboard->button($tarif->title . " - " . $tarif->price)->action("tarif__$tarif->slug");
                }
                return $keyboard;
            })->send();
    }

    public function expire(): void
    {
        if($subscription = Subscription::activeItemByClientId($this->chat->client->id)->first()){
            $this->chat->message('Ваша подписка оканчивается: ' . getHumanDate($subscription->expaire_at))->send();
        }
        else{ 
            $this->chat->message('У вас нет активной подписки')->send();
        }
        $this->chat->message('Меню')
            ->keyboard(function(Keyboard $keyboard){
                $keyboard
                    ->row([
                        Button::make('Тарифы')->action('pay'),
                    ]);
                if( Subscription::activeItem($this->chat->client->id)->first() ){
                    $keyboard
                    ->row([
                        Button::make('Окончание подписки')->action('expire')
                    ]);
                }
                return $keyboard;
            })->send();
    }

    protected function handleCallbackQuery(): void
    {
        $this->extractCallbackQueryData();

        if (config('telegraph.debug_mode')) {
            Log::debug('Telegraph webhook callback', $this->data->toArray());
        }

        /** @var string $action */
        $action = $this->callbackQuery?->data()->get('action') ?? '';

        if(Str::contains($action, 'tarif__')){
            $actionRaw = explode('__', $action);
            $slug = $actionRaw[1];
            $this->tarif($slug);
            return;
        }
        Log::build(['driver' => 'single', 'path' => storage_path('logs/telegram-webhook.log')])->info($action);
        if (!$this->canHandle($action)) {
            report(TelegramWebhookException::invalidAction($action));
            $this->reply(__('telegraph::errors.invalid_action'));

            return;
        }

        $this->$action();
    }

    public function tarif($slug): void
    {
        $tarif = TgTarif::activeItem($slug)->first();

        if(!$tarif){
            $this->chat->message('К сожалению выбранный тариф сейчас недоступен, выберите другой')
                ->send();
            $this->pay();
            return;
        }

        $prices = $this->getPaymentPrices($tarif);
        $provider_data = $this->getProviderData($tarif);
        $description = "Оплата за подписку на канал PapaZhuk сроком на {$tarif->title}";

        $payment_registry = PaymentRegistry::create([
            'telegram_id' => $this->chat->client->telegram_id,
            'total_amount' => $tarif->price->raw(),
            'description' => $description,
            'tg_tarif_id' => $tarif->id,
            'status'=>false,
        ]);

        $this->chat->message("Вы выбрали тарфиф: $tarif->title")
            ->send();

        TelegraphCustomFacade::sendInvoice($this->chat->chat_id, 'Канал Александра Жука', $description, $payment_registry->invoice_payload, $prices, $provider_data )
            ->send();        
    }

    public function successPaymentMessage(): void
    {
        $this->chat->message("Оплата прошла успешно
            \nОтправляем Вам приглашение на закрытый канал, заявки принимаются автоматически!")
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Перейти в канал')->url(env('TG_CHANEL_INVITE_LINK'));
            })
            ->send();
    }


    protected function setClient()
    {
        $this->chat->client()->updateOrCreate([
                'telegraph_chat_id' => $this->chat->id
            ],
            [
                'telegram_id' => $this->message->from()->id(),
                'username' => $this->message->from()->username(),
                'first_name' => $this->message->from()->firstName(),
                'last_name' => $this->message->from()->lastName(),
            ]
        );
    }

    protected function getPaymentPrices($tarif): array
    {
         return  [
            [
            'label' => 'RUB',
            'amount' => "300.00"
            ]
        ];
    }

    protected function getProviderData($tarif): array
    {
        return [
            'receipt' => [
                'items' => [
                    'description' => "Подписка на {$tarif->title}",
                    'quantity' => "1.00",
                    'amount' => [
                        'value' => "$tarif->price->raw()",
                        'currency' => 'RUB'    
                    ],
                    'vat_code' => 1
                ]    
            ]
        ];
    }


    // еуые


    private function handleCommand(Stringable $text): void
    {
        $command = (string) $text->after('/')->before(' ')->before('@');
        $parameter = (string) $text->after('@')->after(' ');

        if (!$this->canHandle($command)) {
            $this->handleUnknownCommand($text);

            return;
        }

        $this->$command($parameter);
    }

    protected function handleUnknownCommand(Stringable $text): void
    {
        if ($this->message?->chat()?->type() === Chat::TYPE_PRIVATE) {
            $command = (string) $text->after('/')->before(' ')->before('@');

            if (config('telegraph.report_unknown_webhook_commands', true)) {
                report(TelegramWebhookException::invalidCommand($command));
            }

            $this->chat->html(__('telegraph::errors.invalid_command'))->send();
        }
    }

    private function handleMessage(): void
    {
        $this->extractMessageData();

        if (config('telegraph.debug_mode')) {
            Log::debug('Telegraph webhook message', $this->data->toArray());
        }

        $text = Str::of($this->message?->text() ?? '');

        if ($text->startsWith('/')) {
            $this->handleCommand($text);

            return;
        }


        if ($this->message?->newChatMembers()->isNotEmpty()) {
            foreach ($this->message->newChatMembers() as $member) {
                $this->handleChatMemberJoined($member);
            }

            return;
        }

        if ($this->message?->leftChatMember() !== null) {
            $this->handleChatMemberLeft($this->message->leftChatMember());

            return;
        }

        if ($this->message?->successfulPayment() !== null) {
            $this->handleSuccessfulPayment($this->message->successfulPayment());

            return;
        }

        $this->handleChatMessage($text);
    }

    protected function canHandle(string $action): bool
    {
        if ($action === 'handle') {
            return false;
        }

        if (!method_exists($this, $action)) {
            return false;
        }

        $reflector = new ReflectionMethod($this::class, $action);
        if (!$reflector->isPublic()) {
            return false;
        }

        return true;
    }

    protected function extractCallbackQueryData(): void
    {
        $this->setupChat();

        assert($this->callbackQuery !== null);

        $this->messageId = $this->callbackQuery->message()?->id() ?? throw TelegramWebhookException::invalidData('message id missing');

        $this->callbackQueryId = $this->callbackQuery->id();

        /** @phpstan-ignore-next-line */
        $this->originalKeyboard = $this->callbackQuery->message()?->keyboard() ?? Keyboard::make();

        $this->data = $this->callbackQuery->data();
    }

    protected function extractMessageData(): void
    {
        $this->setupChat();

        assert($this->message !== null);

        $this->messageId = $this->message->id();

        $this->data = collect([
            'text' => $this->message->text(),
        ]);
    }

    protected function handleChatMemberJoined(User $member): void
    {
        // .. do nothing
    }

    protected function handleChatMemberLeft(User $member): void
    {
        // .. do nothing
    }

    protected function handleChatMessage(Stringable $text): void
    {
        // .. do nothing
    }

    protected function replaceKeyboard(Keyboard $newKeyboard): void
    {
        $this->chat->replaceKeyboard($this->messageId, $newKeyboard)->send();
    }

    protected function deleteKeyboard(): void
    {
        $this->chat->deleteKeyboard($this->messageId)->send();
    }

    protected function reply(string $message, bool $showAlert = false): void
    {
        if (isset($this->callbackQueryId)) {
            $this->bot->replyWebhook($this->callbackQueryId, $message, $showAlert)->send();

            return;
        }

        $this->chat->message($message)->send();
    }

    public function chatid(): void
    {
        $this->chat->html("Chat ID: {$this->chat->chat_id}")->send();
    }

    protected function handleInlineQuery(InlineQuery $inlineQuery): void
    {
        // .. do nothing
    }

    protected function setupChat(): void
    {
        $telegramChat = $this->message?->chat() ?? $this->callbackQuery?->message()?->chat();
        
        assert($telegramChat !== null);

        /** @var TelegraphChat $chat */
        $chat = $this->bot->chats()->firstOrNew([
            'chat_id' => $telegramChat->id(),
        ]);
        $this->chat = $chat;

        if (!$this->chat->exists) {
            if (!$this->allowUnknownChat()) {
                throw new NotFoundHttpException();
            }

            if (config('telegraph.security.store_unknown_chats_in_db', false)) {
                $this->chat->name = Str::of("")
                    ->append("[", $telegramChat->type(), ']')
                    ->append(" ", $telegramChat->title());
                $this->chat->save();
            }
        }
    }

    protected function allowUnknownChat(): bool
    {
        return (bool) match (true) {
            $this->message !== null => config('telegraph.security.allow_messages_from_unknown_chats', false),
            $this->callbackQuery != null => config('telegraph.security.allow_callback_queries_from_unknown_chats', false),
            default => false,
        };
    }
}