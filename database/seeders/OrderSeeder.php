<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\OrderFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderFactory::new()
        ->count(20)
        ->create();
    }
}
