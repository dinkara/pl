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

$factory->define(App\Models\Feed::class, function (Faker $faker) {
    return [
        'status' => '196',
        'health' => 'str',
        'manual' => '326',
        'location_auto_find' => '646',
        'goose' => '631',
        'documents_count' => '251',
        'last_document' => '1590510769',
        'source_link' => 'text',
        'use_html' => '891',
        'list_css' => 'str',
        'link_css' => 'str',
        'title_css' => 'str',
        'title_attr' => 'str',
        'date_css' => 'str',
        'date_attr' => 'str',
        'author' => 'str',
        'location' => 'str',
        'country' => 'str',
        'subcountry' => 'str',
        'city' => 'str',
        'provider_group' => 'str',
        'doc_type' => 'str',
        'title' => 'str',
        'pub_date' => 'str',
        'fulltext_mode' => 'str',
        'fulltext_source_link' => 'str',
        'event_field' => 'str',
        'fulltext_xpath' => 'str',
        'fulltext_field' => 'str',
        'selector' => 'str',
        'source_keywords' => 'str',
        'last_scraped' => '1590510769',
        'description' => 'text',
        'special_encoding' => '284',
        'top_source' => '800',
        'lock_hash' => 'str',
        'scrape_all' => '108',
        'news_type' => 'str',
        'created_by' => '297',
        'content_partner' => '1',
        'scraping_mode' => 'str',
        'options' => 'text',
        'first_document' => 'text',
        'provider_id' => function () {
            return factory(\App\Models\Provider::class)->create()->id;
        },

    ];
});
