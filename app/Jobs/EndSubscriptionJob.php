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
use Services\Telegraph\Facade\TelegraphCustom;

class EndSubscriptionJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public Client $client;

    /**
     * Create a new job instance.
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        TelegraphCustom::banChannelMember( env('TG_CHANEL'), (int)$this->client->telegram_id)->send();
        TelegraphCustom::unbanChannelMember( env('TG_CHANEL'), (int)$this->client->telegram_id)->send(); 
        $this->client->subscriptions->each(function($item, $key){
            $item->update(['status' => 0]);
        });
    }
}
