<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use Faker\Generator as Faker;


    $factory->define(Role::class, function (Faker $faker) {
        return [
            "name" => "admin",
            "updated_at" => "2018-04-09 01:35:38",
            "created_at" => "2018-04-09 01:35:38",

         ];
    });
