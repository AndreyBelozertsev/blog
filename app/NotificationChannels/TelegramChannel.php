<?php

namespace App\NotificationChannels;


use DefStudio\Telegraph\Keyboard\Button;
use Domain\Telegram\Models\Subscription;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Illuminate\Notifications\Notification;

class TelegramChannel
{
    /**
     * Отправить переданное уведомление.
     */
    public function send(object $notifiable, Notification $notification): void
    {

        $notifiable->chat?->html(
            $notification->toTelegram()
        )
        ->keyboard(function(Keyboard $keyboard){
            $keyboard
                ->row([
                    Button::make('Выбрать тариф')->action('pay'),
                ]);
            return $keyboard;
        })->send();



    }
}