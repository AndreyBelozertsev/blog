<?php
namespace Services\Telegraph;


use Carbon\Carbon;
use ReflectionMethod;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Domain\Client\Models\Client;
use Domain\Product\Models\TgTarif;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\InlineQuery;
use DefStudio\Telegraph\Keyboard\Button;
use Domain\Order\Models\PaymentRegistry;
use Domain\Telegram\Models\Subscription;
use Services\Telegraph\DTO\ChatJoinQuery;
use DefStudio\Telegraph\DTO\CallbackQuery;
use DefStudio\Telegraph\Keyboard\Keyboard;

use Services\Telegraph\DTO\PreCheckoutQuery;
use Services\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Keyboard\ReplyButton;
use DefStudio\Telegraph\Keyboard\ReplyKeyboard;
use DefStudio\Telegraph\Exceptions\TelegramWebhookException;
use Services\Telegraph\Facade\TelegraphCustom as TelegraphCustomFacade;


class BotWebhookHandler extends AbstractWebhookHandler
{

    public function handle(Request $request, \DefStudio\Telegraph\Models\TelegraphBot $bot): void
    {
        Log::build(['driver' => 'single', 'path' => storage_path('logs/telegram-webhook.log')])->info($request);

        parent::handle($request, $bot);

        if ($this->request->has('chat_join_request')) {
            /* @phpstan-ignore-next-line */

            $this->handleChatJoinQuery(ChatJoinQuery::fromArray($this->request->input('chat_join_request')));
        }

        if ($this->request->has('pre_checkout_query')) {
            /* @phpstan-ignore-next-line */

            $this->handlePreCheckoutQuery(ChatJoinQuery::fromArray($this->request->input('pre_checkout_query')));
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
        $tg_user_id = $preCheckoutQuery->from()->id();


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
        if($subscription = Subscription::activeItem($this->chat->client->id)->first()){
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
            'status'=>false
        ]);



        $this->chat->message("Вы выбрали тарфиф: $tarif->title")
            ->send();

        TelegraphCustomFacade::sendInvoice($this->chat->chat_id, 'Канал Александра Жука', $description, $payment_registry->invoice_payload, $prices, $provider_data )
            ->send();



        // $subscription = $this->chat->client->subscriptions()->activeItem()->first();
        // if($subscription){
        //     $this->chat->client->subscriptions()->create([
        //         'status' => 1,
        //         'expaire_at' => Carbon::parse($subscription->expaire_at)->addDays($tarif->days)
        //     ]);
        //     $subscription->update(['status' => 0]);
        // }else{
        //     $this->chat->client->subscriptions()->create([
        //         'status' => 1,
        //         'expaire_at' => Carbon::parse(NOW())->addDays($tarif->days)
        //     ]);
        // }


        //$this->success();

        
    }

    public function success(): void
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

    protected function getPaymentPrices($tarif)
    {
         return  [
            'label' => 'руб',
            'amount' => $tarif->price->raw()
        ];
    
    }

    protected function getProviderData($tarif)
    {

        return [
            'receipt' => [
                'items' => [
                    'description' => "Подписка на {$tarif->title}",
                    'quantity' => 1,
                    'amount' => [
                        'value' => $tarif->price->raw(),
                        'currency' => 'RUB'    
                    ],
                    'vat_code' => 1
                ]    
            ]
        ];
    
    }
}