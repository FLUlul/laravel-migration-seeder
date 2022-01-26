<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Song;
use Faker\Generator as Faker;

$factory->define(Song::class, function (Faker $faker) {
    return [
        'title' => $faker -> name(),
        'duration' => $faker -> numberBetween(50, 500),
        'price' => $faker -> numberBetween(100, 30000),
        'lyric' => $faker -> text(300),
        'genre' => $faker -> word()
    ];
});
