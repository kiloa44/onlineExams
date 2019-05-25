<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    $subject = \App\Subject::inRandomOrder()->first();
    return [
        'subject_id'=> $subject->id,
        'name'=> $faker->name,
        'description'=> $faker->text,
        'begin_at'=> $faker->dateTime,
        'end_at'=> $faker->dateTime,
        'mark'=>rand(0,10)
    ];
});
