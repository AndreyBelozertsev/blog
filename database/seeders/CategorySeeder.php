<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Domain\Product\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Для детей',
            ],
            [
                'title' => 'Для всех',
            ],
            [
                'title' => 'Печатная продукция',
                'parent_id' => 1,
            ],
            [
                'title' => 'Сувениры',
                'parent_id' => 1,
            ],
            [
                'title' => 'Одежда',
                'parent_id' => 1,
            ],
            [
                'title' => 'Книги',
                'parent_id' => 1,
            ],
            [
                'title' => 'Печатная продукция',
                'parent_id' => 2,
            ],
            [
                'title' => 'Сувениры',
                'parent_id' => 2,
            ],
            [
                'title' => 'Одежда',
                'parent_id' => 2,
            ],
            [
                'title' => 'Книги',
                'parent_id' => 2,
            ],

        ];
        

        foreach($items as $item){
            Category::updateOrCreate(
                $item
            );
        }
    }
}