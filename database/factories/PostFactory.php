<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id'          =>  1,
        'category_id'  =>  1,
        'title'         =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body'         =>  $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'slug'     =>  $faker->slug,
        'status'     =>  'PUBLISHED',
    ];
});
