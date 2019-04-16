<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use App\Profile;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
    ];
});
