<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

//use App\Model;
use App\User;

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'id' => $faker -> sentence,
        'longitud' => $faker -> sentence,
        'latitud' => $faker -> sentence,
        'edificio' => $faker -> sentence

    ];
});
