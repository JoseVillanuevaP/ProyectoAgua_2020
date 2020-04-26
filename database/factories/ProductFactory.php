<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;

//Para crear model. factory, migration es   php artisan make:model Product -a

$factory->define(App\User::class, function (Faker $faker) {
    return [
         'description' => $faker -> sentence,
         'mes' => $faker -> sentence,
         'anual' => $faker -> sentence,
         'cantidad_agua' => $faker -> sentence

    ];
});
