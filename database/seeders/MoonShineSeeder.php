<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use MoonShine\Models\MoonshineUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MoonShineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MoonshineUser::create([
            'name'=>'Андрей',
            'moonshine_user_role_id' => 1,
            'email' => 'andrey_belozertsev@mail.ru',
            'password' => Hash::make('Aa123456')
        ]);
    }
}
