<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => ucfirst($this->faker->colorName),
            'number' => $this->faker->randomNumber(3, true),
            'color' => $this->faker->hexColor,
            'stock' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeBetween('-30 days', now()),
        ];
    }
}