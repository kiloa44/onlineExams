<?php

use Faker\Generator as Faker;

$factory->define(App\Teacher::class, function (Faker $faker) {
    $user = factory(\App\User::class)->create();
    return [
        "user_id"=>$user->id,
        "status"=>rand(0,1),
    ];
});
