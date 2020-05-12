<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\support\facades\Hash;
use App\User;
use App\Role;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('helloworld'), // password
        'remember_token' => Str::random(10),
    ];
});




# Add a special state to create user with Role(s).
$factory->state( User::class, 'withRole', []);

$factory->afterCreatingState(User::class, 'withRole', function ($user) {
    $role = factory(Role::class)->create(
        [ "name" => "admin",
          "updated_at" => "2018-04-09 01:35:38",
          "created_at" => "2018-04-09 01:35:38",
        ]);
    $user->roles()->attach([$role->id]);
});

























