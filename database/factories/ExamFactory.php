<?php

use Faker\Generator as Faker;

$factory->define(App\Exam::class, function (Faker $faker) {
    $teacher = \App\Teacher::inRandomOrder()->first();
    return [
        "teacher_id"=>$teacher->id,
        'name'=> $faker->name,
        'description'=> $faker->text,
        'begin_at'=> $faker->dateTime,
        'end_at'=> $faker->dateTime,
        'mark'=>rand(0,10),

    ];
});
