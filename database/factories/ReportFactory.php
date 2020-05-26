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

$factory->define(App\Models\Report::class, function (Faker $faker) {
    return [
        'title' => 'str',
        'layout' => 'str',
        'logo' => 'str',
        'author' => 'str',
        'company_name' => 'str',
        'published_at' => '1590510770',
        'content' => 'text',
        'emails' => 'text',
        'attach_pdf' => '98',
        'attach_html' => '457',
        'last_edited' => '1989-06-07 07:50:34',
        'report_image_description' => 'str',
        'published' => '1',
        'sent_at' => '1590510770',
        'template' => 'str',
        'template_options' => 'text',
        'user_id' => function () {
            return factory(\App\Models\User::class)->create()->id;
        },
        'author_id' => function () {
            return factory(\App\Models\Author::class)->create()->id;
        },
        'team_id' => function () {
            return factory(\App\Models\TeamsList::class)->create()->id;
        },
        'report_template_id' => function () {
            return factory(\App\Models\ReportTemplate::class)->create()->id;
        },

    ];
});
