<?php

use Faker\Generator as Faker;

$factory->define(App\ExamQuestion::class, function (Faker $faker) {
    $question =  \App\Question::inRandomOrder()->first();
    $exam =  \App\Exam::inRandomOrder()->first();
    return [
        "question_id"=>$question->id,
        "exam_id"=>$exam->id,

    ];
});
