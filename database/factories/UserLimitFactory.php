<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\UserLimit::class, function (Faker $faker) {
    return [
        'key' => 'str',
        'limit' => '455',
        'user_id' => function () {
            return factory(\App\Models\User::class)->create()->id;
        },

    ];
});
