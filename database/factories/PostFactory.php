<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'           => $title = $faker->word,
        'slug'            => str_slug($title),
        'keywords'        => $faker->word,
        'description'     => $faker->paragraph,
        'page_content'         => $faker->paragraph,
        'category_id'     => function () {
            if(\App\Category::count() > 0)
                return \App\Category::where('parent_id', 0)->get()->random();
            else
                return factory(\App\Category::class)->create(['parent_id' => 0]);
        },
        'subcategory_id' => function () {
            if(\App\Category::where('parent_id','>',0)->count() > 0)
                return \App\Category::where('parent_id', '>', 0)->get()->random();
            else
                return factory(\App\Category::class)->create(['parent_id' => 1]);
        },
        'hits'            => $faker->numberBetween(10, 20),
        'status'          => 0,
        'user_id'         => function () {
            if(\App\User::count() > 0)
                return \App\User::all()->random();
            else
                return factory(\App\User::class)->create();
        }
    ];

});
