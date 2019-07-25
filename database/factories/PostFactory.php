<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'           => $title = $faker->word,
        'slug'            => str_slug($title),
        'keywords'        => $faker->word,
        'summary'         => $faker->paragraph,
        'content'         => $faker->paragraph,
        'category_id'     => function () {
            return \App\Category::where('parent_id', 0)->random();
        },
        'sub_category_id' => function () {
            return \App\Category::where('parent_id', '>', 0)->random();
        },
        'hits'            => $faker->numberBetween(10, 20),
        'status'          => 0,
        'user_id'         => function () {
            return \App\User::all()->random();
        }
    ];

});
