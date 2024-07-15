<?php

namespace App\Console;

use Carbon\Carbon;
use App\Jobs\EndSubscriptionJob;
use Domain\Client\Models\Client;
use Illuminate\Console\Scheduling\Schedule;
use App\Jobs\EndSubscriptionNotificationJob;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {

        $schedule->command('queue:work --stop-when-empty')
            ->everyMinute()
            ->withoutOverlapping();

        $schedule->call(function () {
            EndSubscriptionNotificationJob::dispatch(
                "Ваша подписка заканчивается через 5 дней. Продолжить свое путешествие в мир океанов вы сможете продлив доступ.\nНажмите на кнопку для продления:", 
                5
            );
        })->dailyAt('12:00');

        $schedule->call(function () {
            EndSubscriptionNotificationJob::dispatch(
                "Ваша подписка заканчивается через 2 дня. Продолжить свое путешествие в мир океанов вы сможете продлив доступ.\nНажмите на кнопку для продления:",
                2
            );
        })->dailyAt('13:00');

        $schedule->call(function () {
            EndSubscriptionNotificationJob::dispatch(
                "Ваша подписка заканчивается через 24 часа. Оставайтесь с нами на борту, продлив рейс.\nНажмите на кнопку для продления:", 
                1
            );
        })->dailyAt('14:00');



        $schedule->call(function () {
            $date = Carbon::today()->addDays(-1)->toDateString();
            $clients = Client::with('subscriptions')->whereHas('subscriptions', function($q) use($date) {
                $q->active()
                ->whereDate('expaire_at', $date);
            })->get();
            
            $clients->each(function($item, $key){
                $item->notify(new \App\Notifications\EndSubscription("Ваша подписка окончена.\nОтправится в новое путешествие:"));
                EndSubscriptionJob::dispatch($item);
            });
            
        })->dailyAt('14:00');

    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
