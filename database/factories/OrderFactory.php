<?php

namespace Database\Factories;

use Domain\Order\Models\Order;
use Domain\Client\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Domain\Order\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Order::class;


    public function definition(): array
    {
        if($client = Client::inRandomOrder()->first()){
    
            return [
                'client_id' => $client->id,
                'amount' => fake()->numberBetween(200, 1000),
                'description' => fake()->paragraph(),
            ];
        }
    }
}