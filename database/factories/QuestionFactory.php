<?php

use Faker\Generator as Faker;
use App\Exam;
$factory->define(App\Question::class, function (Faker $faker) {
    $subject = \App\Subject::inRandomOrder()->first();
    return [
        'subject_id'=>$subject->id,
        'text'=> $faker->text,
        'is_correct'=> $faker->boolean,
        'correct_answer'=> $faker->title,
        'type'=> ["TorF","choose","complete"][rand(0,2)],
        'choices'=>json_encode(array([$faker->name,$faker->name,$faker->name])),
    ];
});
