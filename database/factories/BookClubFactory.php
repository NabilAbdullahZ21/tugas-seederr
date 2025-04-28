<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookClubFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(3, true),
            'description' => $this->faker->sentence(),
        ];
    }
}
