<?php

use Faker\Generator as Faker;
use App\Exam;
$factory->define(App\Question::class, function (Faker $faker) {

    return [
        'text'=> $faker->text,
        'is_correct'=> $faker->boolean,
        'correct_answer'=> $faker->title,
        'type'=> ["TorF","choose","complete"][rand(0,2)],
        'choices'=> $faker->text
    ];
});
