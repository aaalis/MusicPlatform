<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Author;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();



//        Track::factory()->count(5)->create();

        \App\Models\Author::factory()->create([
            'name' => 'Michael McDonald',
        ]);
        \App\Models\Author::factory()->create([
            'name' => 'Perry Como',
        ]);
        \App\Models\Author::factory()->create([
            'name' => 'Frank Sinatra',
        ]);

        \App\Models\Genre::factory()->create([
            'genreName' => 'jazz',
        ]);
        \App\Models\Genre::factory()->create([
            'genreName' => 'rock',
        ]);
        \App\Models\Genre::factory()->create([
            'genreName' => 'pop',
        ]);

        \App\Models\Track::factory()->create([
            'trackName' => 'I Keep Forgettin',
            'author_id' => '1',
            'genre_id' => '2',
         ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Stop,Look,Listen',
            'author_id' => '1',
            'genre_id' => '3',
        ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Show You The Way',
            'author_id' => '1',
            'genre_id' => '3',
        ]);

        \App\Models\Track::factory()->create([
            'trackName' => 'Its Impossible',
            'author_id' => '2',
            'genre_id' => '3',
        ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Magic Moments',
            'author_id' => '2',
            'genre_id' => '3',
        ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Where Do I begin',
            'author_id' => '2',
            'genre_id' => '3',
        ]);

        \App\Models\Track::factory()->create([
            'trackName' => 'My Way',
            'author_id' => '3',
            'genre_id' => '1',
        ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Strangers in the Night',
            'author_id' => '3',
            'genre_id' => '1',
        ]);
        \App\Models\Track::factory()->create([
            'trackName' => 'Thats Life',
            'author_id' => '3',
            'genre_id' => '1',
        ]);
    }
}
