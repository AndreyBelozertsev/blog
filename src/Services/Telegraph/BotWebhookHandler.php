<?php
namespace Services\Telegraph;


use ReflectionMethod;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Domain\Product\Models\TgTarif;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\InlineQuery;
use DefStudio\Telegraph\Keyboard\Button;
use Domain\Telegram\Models\Subscription;
use Services\Telegraph\DTO\ChatJoinQuery;
use DefStudio\Telegraph\DTO\CallbackQuery;
use DefStudio\Telegraph\Keyboard\Keyboard;
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

    }

    protected function handleChatJoinQuery(ChatJoinQuery $chatJoinQuery): void
    {
        $chat_id = $chatJoinQuery->chat()->id();
        $user_id = $chatJoinQuery->from()->id();
        TelegraphCustomFacade::approveChatJoin( $chat_id, $user_id)->send();

        $telegraphChat = TelegraphChat::where('chat_id', '259548170')->first();
  
        $telegraphChat->html("Ваша заявка одобрена!"
        )->keyboard(function(Keyboard $keyboard) use($chatJoinQuery){
            return $keyboard
                ->button('В канал')->url('https://t.me/+Ybl8epmC-qZiZDgy');
        })->send();

    }
    
    public function start(): void
    {

        $this->setClient();

        $this->chat->client->id;

        $this->chat->html("Добро пожаловать!
                \nЭто бот канала Александра Жука. На канале Вы найдете: 
                \n- эксклюзивные длинные видео в оригинальном качестве
                \n- авторские фото для заставки на ваши смартфоны
                \n- открытые комментарии для живого общения, прямые эфиры 
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
                    $keyboard->button($tarif->title)->action("tarif__$tarif->slug");
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
        $this->chat->message('')
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

        $this->chat->message("Вы выбрали тарфиф: $tarif->title. \nСсылка на оплату:")
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Оплатить')->url('https://ya.ru');
            })
            ->send();
    }

    public function success(): void
    {
        $this->chat->message('Оплата прошла успешно')
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Перейти в канал')->url('https://ya.ru');
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
}