<?php

namespace App\Notifications;

use App\NotificationChannels\TelegramChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

class EndSubscription extends Notification implements ShouldQueue
{
    use Queueable;

    public string $text = "";
    /**
     * Create a new notification instance.
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [
            TelegramChannel::class
        ];
    }

    public function toTelegram(): string|null
    {
       return $this->text;
    }
}
