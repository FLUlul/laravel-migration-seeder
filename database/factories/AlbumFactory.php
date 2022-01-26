<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'title'=> $faker -> name(),
        'tracks'=> $faker->numberBetween(0, 100),
        'genre'=> $faker -> word(),
        'release'=> $faker -> date('Y_m_d'),
    ];
});
