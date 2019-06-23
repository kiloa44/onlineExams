<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    $subject = \App\Subject::inRandomOrder()->first();
    $teacher = \App\Teacher::inRandomOrder()->first();
    $class_subject= \App\ClassSubject::inRandomOrder()->first();
    return [
        "teacher_id"=>$teacher->id,
        'subject_id'=> $subject->id,
        'name'=> $faker->name,
        'description'=> $faker->text,
        'begin_at'=> $faker->dateTime,
        'end_at'=> $faker->dateTime,
        'class_subject_id'=>$class_subject->id,
        'mark'=>rand(0,10),

    ];
});
