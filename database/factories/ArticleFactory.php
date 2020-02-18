<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    $tags = collect(['php', 'ruby', 'c++', 'javascript', 'python', 'java'])
    ->random(2)
    ->values()
    ->all();

    return [
        'title' => $faker->sentence(),
        'body' => $faker->text(),
        'tags' =>$tags
    ];
});
