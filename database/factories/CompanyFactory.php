<?php

use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'code' => $faker->numberBetween($min = 10000, $max = 90000),
        'name' => $title,
        'slug' => str_slug($title),
        'category_service_id' => $faker->randomElement($array = array ('1', '2', '3', '4', '5', '6', '7')),
        'type_services_id' => $faker->randomElement($array = array ('1', '2', '3', '4')),
        'distance_beach' => $faker->numberBetween($min = 10, $max = 10000),
        'check_in' => $faker->time,
        'check_out' => $faker->time,
        'number_room' => $faker->randomElement($array = array ('1', '2', '3', '4')),
        'city_id' => $faker->randomElement($array = array ('1', '2', '3', '4')),
        'category_service_id' => $faker->randomElement($array = array ('1', '2', '3', '4', '5')),
        'user_id' => '1',
        'status_id' => '1',
    ];
});




