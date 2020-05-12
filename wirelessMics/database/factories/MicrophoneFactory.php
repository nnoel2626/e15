<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Microphone;
use App\Tag;
use App\Location;
use App\User;
use Faker\Generator as Faker;


    $factory->define(Microphone::class, function (Faker $faker) {
        $micSlug = $faker->words(rand(3, 6), true); # green park balloon
        $slug = Str::slug($micSlug, '-'); # green-park-balloon
        return [
            'slug' => $slug,
            // one-to-many locations
            'location_id' => function () {
                return factory(Location::class)->create()->id;
            },
            'make'=> 'shure',
            'model'=> 'axient digital',
            'band'=> 'G57',
            'frequency_range'=> '470- 616 MHZ',
            'serial_number'=> '12345678',
            'type'=> 'Lapel',
            'group'=> 'G5',
            'channel'=> 'CH243',
            'assigned_frequency'=> '602.350 MHZ',
            'comments' => $faker->text($maxNbChars = 200),

        ];
    });

# Factory states
# https://laravel.com/docs/database-testing#factory-states
# allow you to define “discrete modifications” of your model factories
# Examples:


 # Add a special state to create microphones with multiple tag
 $factory->state(Microphone::class, 'withTag', []);

 $factory->afterCreatingState( microphone::class, 'withTag', function ($microphone) {
   $tag = factory(Tag::class)->create(
        [ "name" => "installed",
          "updated_at" => "2018-04-09 01:35:38",
          "created_at" => "2018-04-09 01:35:38",
        ]);

    $microphone->tags()->attach($tag);

 });

