<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city_id' => $this->faker->numberBetween(1, 5),
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'description' => $this->faker->text(),

        ];
    }
}
