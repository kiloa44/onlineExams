<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    $teacher = \App\Teacher::inRandomOrder()->first();
    $class_subject= \App\ClassSubject::inRandomOrder()->first();
    return [
        "teacher_id"=>$teacher->id,
        'class_subject_id'=>$class_subject->id,
        'name'=> $faker->name,
        'description'=> $faker->text,
        'begin_at'=> $faker->dateTime,
        'end_at'=> $faker->dateTime,
        'mark'=>rand(0,10),

    ];
});
