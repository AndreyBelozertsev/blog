<?php
namespace Services\Telegraph;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\InlineQuery;
use DefStudio\Telegraph\Keyboard\Button;
use Services\Telegraph\DTO\ChatJoinQuery;
use DefStudio\Telegraph\DTO\CallbackQuery;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Services\Telegraph\Models\TelegraphChat;
use DefStudio\Telegraph\Keyboard\ReplyButton;
use Services\Telegraph\Facade\TelegraphCustom as TelegraphCustomFacade;
use DefStudio\Telegraph\Keyboard\ReplyKeyboard;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Exceptions\TelegramWebhookException;


class BotWebhookHandler extends WebhookHandler
{

    public function handle(Request $request, \DefStudio\Telegraph\Models\TelegraphBot $bot): void
    {
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
        $this->chat->html("Добро пожаловать!
                \nЭто бот канала Александра Жука. На канале Вы найдете: 
                \n- эксклюзивные длинные видео в оригинальном качестве
                \n- авторские фото для заставки на ваши смартфоны
                \n- открытые комментарии для живого общения, прямые эфиры 
                \n- возможность поддержать мои новые проекты для вас"
            )
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->row([
                        Button::make('Оплатить')->action('pay'),
                        Button::make('Окончание подписки')->action('expire'),
                    ]);
            })->send();
    }


    public function pay(): void
    {
        $this->chat->message('Выберите тариф:')
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('30 дней')->action('tarif1')
                    ->button('90 дней')->action('tarif2')
                    ->button('180 дней')->action('tarif3')
                    ->button('Тест')->action('testHook');
            })->send();
    }

    public function expire(): void
    {
        $this->chat->message('Ваша подписка оканчивается через хххх дней')->send();
    }

    public function tarif1(): void
    {
        $this->chat->message("Вы выбрали тарфиф на 30 дней. \nСсылка на оплату:")
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Оплатить')->url('https://ya.ru');
            })
            ->send();
    }

    public function tarif2(): void
    {
        $this->chat->message("Вы выбрали тарфиф на 90 дней. \nСсылка на оплату:")
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Оплатить')->url('https://ya.ru');
            })
            ->send();
    }

    public function tarif3(): void
    {

        $this->chat->message("Вы выбрали тарфиф на 180 дней. \nСсылка на оплату:")
            ->keyboard(function(Keyboard $keyboard){
                return $keyboard
                    ->button('Оплатить')->url('https://ya.ru');
            })
            ->send();
    }

    public function testHook(): void
    {
        $telegraphChat = TelegraphChat::where('chat_id', '-1001570080663')->first();

        // $link = $telegraphChat->createInviteLink()    
        //     ->withJoinRequest()      
        //     ->send();
        

        $this->chat->message('https://t.me/+Ybl8epmC-qZiZDgy')
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

}