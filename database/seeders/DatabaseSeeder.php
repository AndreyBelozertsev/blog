<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            //ClientSeeder::class,
            NavigationSeeder::class,
            PageSeeder::class,
            MoonShineSeeder::class,
            TgTarifSeeder::class,
            // OrderSeeder::class,
            CategorySeeder::class,
            LinkCategorySeeder::class,
            LinkCategorySeeder::class,
            TelegraphBotSeeder::class
        ]);
    }
}
