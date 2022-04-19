<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {

    $title = $faker->sentences(1, true);

    $author = \App\User::all()->pluck('id')->random();

    return [
        'author' => $author,
        'title' => $title,
        'slug' => \Illuminate\Support\Str::slug($title),
        'content' => $faker->sentences(5, true)
    ];
});
