<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{
    public function definition(): array
    {
        return [
            'author' => fake()->unique()->name(),
            'name' => fake()->words(2, true),
        ];
    }
}
