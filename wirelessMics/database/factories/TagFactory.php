<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
     return [
        'name' => "installed",
        "updated_at" => "2018-04-09 01:35:38",
        "created_at" => "2018-04-09 01:35:38",

         ];

});



























//date and time
// $faker->year;
// $faker->month; //number representation of a month
// $faker->monthName;
// $faker->timezone; //valid php timezone (http://php.net/manual/en/timezones.php)
// $faker->time; //string time
// $faker->dateTime; //datetime object
// $faker->unixTime; //unix timestamp
// 'created_at' => $faker->dateTimeThisDecade(),
//  'updated_at' => $faker->dateTimeThisDecade()

