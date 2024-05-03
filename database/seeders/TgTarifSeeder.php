<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\TgTarif;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TgTarifSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => '30 дней',
                'days' => 30,
                'price' => 300,
                'sort' => 100
            ],
            [
                'title' => '90 дней',
                'days' => 90,
                'price' => 800,
                'sort' => 200
            ],
            [
                'title' => '180 дней',
                'days' => 180,
                'price' => 1500,
                'sort' => 300
            ],
            [
                'title' => '360 дней',
                'days' => 360,
                'price' => 2800,
                'sort' => 400
            ],
        ];
        

        foreach($items as $item){
            TgTarif::updateOrCreate(
                $item
            );
        }
    }
}
