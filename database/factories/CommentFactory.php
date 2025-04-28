<?php

namespace Database\Factories;

use App\Models\Reader;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'reader_id' => Reader::factory(),
            'body' => $this->faker->paragraphs(2, true),
        ];
    }
}
