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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function ($faker) {
    return [
        'cate_id' => 1,
        'title' => $faker->sentence(mt_rand(3, 10)),
        'slug' => $faker->sentence(mt_rand(3, 5)),
        'key_words' => $faker->sentence(mt_rand(3, 10)),
        'meta_description' => $faker->sentence(mt_rand(3, 6)),
        'intro' => $faker->sentence(mt_rand(3, 10)),
        'title' => $faker->sentence(mt_rand(3, 6)),
        'subtitle' => $faker->sentence(mt_rand(3, 6)),
        'page_image' => $faker->sentence(mt_rand(3, 6)),
        'is_draft' => 1,
        'content_raw' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'content_html' => join("\n\n", $faker->paragraphs(mt_rand(3, 6))),
        'published_at' => $faker->dateTimeBetween('-1 month', '+3 days'),
    ];
});
