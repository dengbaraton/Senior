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

$factory->define(App\users::class, function (Faker\Generator $faker) {
    return [
        'full_name' => $faker->name,

        'password' => bcrypt(str_random(10)),
        'phone_number' => metaphone(("99999999999")),
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\vehicles::class, function (Faker\Generator $faker) {
    return [
        'mo' => $faker->address,
        'model' => $faker->address,

    ];
});
/*


$factory->define(App\roles::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence,
    ];
});


$factory->define(App\request_status::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence,
    ];
});

$factory->define(App\client_requests::class, function (Faker\Generator $faker) {
    return [
        'from' => $faker->streetName,
        'to' => $faker->lastName,

    ];
});
$factory->define(App\vehicles::class, function (Faker\Generator $faker) {
    return [
        'model' => $faker->address,

    ];
});


$factory->define(App\roles::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence,
    ];
});


$factory->define(App\request_status::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->sentence,
    ];
});

$factory->define(App\client_requests::class, function (Faker\Generator $faker) {
    return [
        'from' => $faker->streetName,
        'to' => $faker->lastName,

    ];
});
*/