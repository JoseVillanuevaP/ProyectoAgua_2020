<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'id' => $faker -> sentence,
        'name' => $faker -> sentence,
         'description' => $faker -> sentence
    ];
});
