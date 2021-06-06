<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        
        'name' => $faker -> firstNameFemale,
        'model' => $faker -> colorName,
        'kW' => $faker -> numberBetween(120, 350)

    ];
});
