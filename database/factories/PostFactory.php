<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        //
    ];
});



$factory->define(App\Post::class, function (Faker\Generator $faker) {
    $title = $faker->sentence(4);
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'company_id' => $faker->randomElement($array = array ('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12')),
        'content' => $faker->text,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'price' => $faker->numberBetween($min = 10, $max = 10000),
        'expiration_date' => $faker->date,
        'category_id' => $faker->randomElement($array = array ('1', '2', '3', '4')),
        'category_service_id' => $faker->randomElement($array = array ('1', '2', '3', '4', '5', '6')),
        'city_id' => $faker->randomElement($array = array ('1', '2', '3', '4', '5')),
        'user_id' => '1',
        'status_id' => '1',
    ];
});
