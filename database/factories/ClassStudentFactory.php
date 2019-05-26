<?php

use Faker\Generator as Faker;

$factory->define(App\ClassStudent::class, function (Faker $faker) {
    $student = \App\Student::inRandomOrder()->first();
    $classroom = \App\Classroom::inRandomOrder()->first();
    return [
        "student_id"=>$student->id,
        "classroom_id"=>$classroom->id

    ];
});
