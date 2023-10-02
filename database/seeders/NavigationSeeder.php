<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

use Domain\Setting\Models\Navigation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'title' => 'Обо мне',
                'url' => '/about',
                'type' => 'top',
                'status' => 1,
                'sort' => 100
            ],
            [
                'title' => 'Как стать моряком',
                'url' => '/sailor',
                'type' => 'top',
                'status' => 1,
                'sort' => 200
            ],
            [
                'title' => 'Как стать блогером',
                'url' => '/blogger',
                'type' => 'top',
                'status' => 1,
                'sort' => 300
            ],
            [
                'title' => 'Telegram канал',
                'url' => '/telegram',
                'type' => 'top',
                'status' => 1,
                'sort' => 400
            ],
            [
                'title' => 'Магазин',
                'url' => '/shop',
                'type' => 'top',
                'status' => 1,
                'sort' => 500
            ]
        ];
        

        foreach($items as $item){
            Navigation::updateOrCreate(
                $item
            );
        }
    }
}
