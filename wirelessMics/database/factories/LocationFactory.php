<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Location;
use Faker\Generator as Faker;
use Faker\Provider\Address;


#oneToMany relationship
 $factory->define(Location::class, function (Faker $faker) {
    $building = $faker->streetAddress ;
    $room = $faker->numberBetween(10, 200);
    $city = $faker->city;
    $state  = $faker->state;
    $postal_code = substr($faker->postcode,0,5);
    return [
        'building' => $building,
        'room' => $room,
        'city' =>$city,
        'state'=> $state,
        'postal_code' => $postal_code,
    ];
});



//$faker->numberBetween(1950, 2020),
