<?php

namespace Database\Factories;

use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClientFactory extends Factory
{
    protected $model = Client::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'telegram_id' => fake()->randomNumber(9, true),
            'username' => fake()->word(),
            'first_name' => fake()->name(),
            'last_name' => fake()->lastName(),
        ];
    }
}
