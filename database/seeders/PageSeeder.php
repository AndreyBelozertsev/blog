<?php

namespace Database\Seeders;

use Domain\Page\Models\Page;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PageSeeder extends Seeder
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
                'title' => 'Главная',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/',
                'template' => 'home',
                'status' => 1,
                'sort' => 500,

            ],
            [
                'title' => 'Кто я',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/about',
                'template' => 'about',
                'status' => 1,
                'sort' => 500,

            ],
            [
                'title' => 'Как стать моряком',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/sailor',
                'template' => 'courses',
                'status' => 1,
                'sort' => 500,
                
            ],
            [
                'title' => 'Как стать блогером',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/blogger',
                'template' => 'courses',
                'status' => 1,
                'sort' => 500,
                
            ],
            [
                'title' => 'Telegram канал',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/telegram',
                'template' => 'telegram',
                'status' => 1,
                'sort' => 500,
                
            ],
            [
                'title' => 'Товары для детей',
                'content' => fake()->paragraph(),
                'description' => fake()->paragraph(),
                'slug' => '/kids-shop',
                'status' => 1,
                'sort' => 500,
            ]
        ];
        

        foreach($items as $item){
            Page::updateOrCreate(
                $item
            );
        }
    }
}
