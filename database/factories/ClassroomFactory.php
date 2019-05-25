<?php

use Faker\Generator as Faker;

$factory->define(App\Classroom::class, function (Faker $faker) {
    return [
        "name"=>$faker->name,
        "description"=>$faker->text
    ];
});
