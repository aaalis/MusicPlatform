<?php

namespace Database\Factories;

use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{

    public function definition(): array
    {
        return [
            'trackName' => '',
            'author_id' => null,
            'genre_id' => null,
        ];
    }
}
