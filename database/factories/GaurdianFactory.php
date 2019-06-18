<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Guardian;
use Faker\Generator as Faker;

$factory->define(Guardian::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'identity_number'=>rand(10000000,99999999),
        'phone_number'=>$faker->phoneNumber,
    ];
});
