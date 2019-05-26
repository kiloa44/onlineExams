<?php

use Faker\Generator as Faker;

$factory->define(App\TeacherSubject::class, function (Faker $faker) {
    $teacher =  \App\Teacher::inRandomOrder()->first();
    $sujbect =  \App\Subject::inRandomOrder()->first();
    return [
        "subject_id"=>$sujbect->id,
        "teacher_id"=>$teacher->id
    ];
});
