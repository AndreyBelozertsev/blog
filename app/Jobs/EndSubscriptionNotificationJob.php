<?php

namespace App\Jobs;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Domain\Client\Models\Client;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class EndSubscriptionNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public string $text;

    public int $days;

    /**
     * Create a new job instance.
     */
    public function __construct(string $text, int $days)
    {
        $this->text = $text;
        $this->days = $days;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $date = Carbon::today()->addDays($this->days)->toDateString();

        $clients = Client::with('subscriptions')->whereHas('subscriptions', function($q) use($date) {
            $q->active()
            ->whereDate('expaire_at', $date);
        })->get();
        
 
        $clients->each(function($item, $key){
            $item->notify(new \App\Notifications\EndSubscription($this->text));
        });
    }
}
