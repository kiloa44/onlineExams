<?php

use Faker\Generator as Faker;

$factory->define(App\ClassSubject::class, function (Faker $faker) {
    $subject = \App\Subject::inRandomOrder()->first();
    $classroom = \App\Classroom::inRandomOrder()->first();
    return [
        "subject_id"=>$subject->id,
        "classroom_id"=>$classroom->id,

    ];
});
