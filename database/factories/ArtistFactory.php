<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artist;
use Faker\Generator as Faker;

$factory->define(Artist::class, function (Faker $faker) {
    return [
        'alias' => $faker -> name(),
        'name' => $faker -> name(),
        'surname' => $faker -> name(),
        'members' => $faker -> randomDigitNotNull(),
        'website' => $faker -> url()
    ];
});
