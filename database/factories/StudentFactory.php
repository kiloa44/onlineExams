<?php

use Faker\Generator as Faker;
$factory->define(App\Student::class, function (Faker $faker) {
    $user = factory(App\User::class)->create();
    $guardian = \App\Guardian::inRandomOrder()->first();
    //$guardian = \App\Guardian::inRandomOrder()->first();
    return [
        "user_id"=>$user->id,
        "guardian_id"=>$guardian->id,
        "status"=>rand(0,1),
    ];
});
