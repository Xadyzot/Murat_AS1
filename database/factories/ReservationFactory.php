<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 30),
            'restaurant_id' => $this->faker->numberBetween(1, 5),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'guest_count' => $this->faker->numberBetween(1, 8),
        ];
    }
}
