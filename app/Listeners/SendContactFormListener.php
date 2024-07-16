<?php

namespace App\Listeners;

use Domain\Auth\Models\User;
use App\Events\SendContactFormEvent;
use Illuminate\Support\Facades\Cache;
use Services\Telegram\TelegramBotApi;
use Illuminate\Queue\InteractsWithQueue;
use Domain\Product\Models\ServiceCategory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactFormSendNotification;

class SendContactFormListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    public function handle(SendContactFormEvent $event)
    {
        TelegramBotApi::sendMessage( $this->textForTelegram($event->customer) , env('LOGGER_TELEGRAM_CHAT_ID'), env('LOGGER_TELEGRAM_TOKEN') );
        //Notification::send(User::all(), new ContactFormSendNotification ($event->customer));
    }

    protected function textForTelegram($customer): string
    {
        return 'Заявка на сайта ' . env('APP_NAME')
        . "\nИмя - "  . $customer->name
        . "\nТелефон - "  . $customer->phone
        . "\nКомментарий - "  . $customer->comment;

    }

}