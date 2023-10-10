<?php
namespace Services\Telegraph;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Stringable;
use Illuminate\Support\Facades\Log;
use DefStudio\Telegraph\DTO\Message;
use DefStudio\Telegraph\DTO\InlineQuery;
use DefStudio\Telegraph\Keyboard\Button;
use DefStudio\Telegraph\DTO\CallbackQuery;
use DefStudio\Telegraph\Facades\Telegraph;
use DefStudio\Telegraph\Keyboard\Keyboard;
use DefStudio\Telegraph\Models\TelegraphBot;
use DefStudio\Telegraph\Keyboard\ReplyButton;
use DefStudio\Telegraph\Keyboard\ReplyKeyboard;
use DefStudio\Telegraph\Handlers\WebhookHandler;
use DefStudio\Telegraph\Exceptions\TelegramWebhookException;

class BotWebhookHandler extends WebhookHandler
{
    
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
                    ->button('180 дней')->action('tarif3');
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