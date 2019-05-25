<?php

use Faker\Generator as Faker;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        "text"=>$faker->name,
        "type"=>["TorF","choose","complete"][rand(0,2)]
    ];
});
