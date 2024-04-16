<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Product\Models\LinkCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LinkCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'Wildberries',
            ],
            [
                'title' => 'Ozon',
            ]

        ];
    

    foreach($items as $item){
        LinkCategory::updateOrCreate(
            $item
        );
    }
    }
}
