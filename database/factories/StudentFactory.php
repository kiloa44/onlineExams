<?php

use Faker\Generator as Faker;
$factory->define(App\Student::class, function (Faker $faker) {
    $user = factory(App\User::class)->create();
    return [
        "user_id"=>$user->id
    ];
});
