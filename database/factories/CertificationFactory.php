<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Certification;
use Faker\Generator as Faker;

$factory->define(Certification::class, function (Faker $faker) {
    $student = \App\Student::inRandomOrder()->first();
    return [
        'student_id'=>$student->id,
        'notes'=>$faker->name,
    ];
});
