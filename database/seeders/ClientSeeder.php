<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Factories\ClientFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ClientFactory::new()
            ->count(20)
            ->create();
    }
}
