<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use    App\Student;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email'=>$faker->unique()->email,
        'age' =>$faker->numberBetween(10, 45),

    ];
});
