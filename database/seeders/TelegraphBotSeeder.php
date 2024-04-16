<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Services\Telegraph\Models\TelegraphBot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TelegraphBotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => env('TG_BOT_NAME'),
                'token' => env('TG_BOT_TOKEN'),
            ]
        ];
    

        foreach($items as $item){
            TelegraphBot::updateOrCreate(
                $item
            );
        }
        
    }
}
