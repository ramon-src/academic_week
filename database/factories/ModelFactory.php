<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->defineAs(AcademicDirectory\Domains\Users\User::class, 'Root', function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('12345'),
        'role_id' => 1,
    ];
});
$factory->defineAs(AcademicDirectory\Domains\Users\User::class, 'Admin', function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('12345'),
        'role_id' => 2,
    ];
});
$factory->defineAs(AcademicDirectory\Domains\Users\User::class, 'DefaultUser', function (Faker\Generator $faker) {
    static $password;

    return [
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('12345'),
        'role_id' => 2,
    ];
});