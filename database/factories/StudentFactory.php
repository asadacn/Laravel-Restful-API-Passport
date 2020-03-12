<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
$factory->define(Student::class, function (Faker $faker) {
    return [
        'name'  => $faker->name(),
        'roll' => $faker->randomNumber(3),
        'class' => $faker->randomDigit(),
        'section' => $faker->randomDigit(),
        'group' =>Str::ucfirst($faker->randomLetter()) ,
    ];
});
