<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\support\facades\Hash;
use App\User;
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




#php artisan make:factory RoleFactory --model="App\Role"

// $factory->define(App\User::class, function (Faker  $faker) {
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = Hash('secret'),
//     ];
// });



#Below is the Seed file in the Laravel project:

// public function run()
// {
//     factory(App\User::class, 50)->create()->each(function ($u) {
//         $u->roles()->save(factory(App\Role::class)->make());
//     });

//     factory(App\Role::class, 20)->create()->each(function ($u) {
//         $u->users()->save(factory(App\User::class)->make());
//     });
// }




# Populate roles
//factory(App\Role::class, 20)->create();

// Populate users
//factory(App\User::class, 50)->create();

// Get all the roles attaching up to 3 random roles to each user
//$roles = App\Role::all();

// Populate the pivot table
// App\User::all()->each(function ($user) use ($roles) {
//     $user->roles()->attach(
//         $roles->random(rand(1, 2))->pluck('id')->toArray()
//     );
// });







#Another way is to use saveMany() function

// public function run()
// {

//    factory(App\User::class,3)->create();

//    $roles = factory(App\Role::class,3)->create();

//    App\User::All()->each(function ($user) use ($roles){
//       $user->roles()->saveMany($roles);
//    });
// }


#Composer: "fzaninotto/faker": "v1.3.0"
// use Faker\Factory as Faker;

// class UsersTableSeeder extends Seeder {

//     public function run()
//     {
//         $faker = Faker::create();

//         foreach(range(1, 100) as $index)
//         {
//             User::create([
//                 'username'   => $username = $faker->userName,
//                 'email'      => $faker->email,
//                 'password'   => Hash::make($username),
//                 'account_id' => $index
//             ]);
//         }
//     }

// }

// // all other seeders look the same, so I paste just the code that matters:
// // Categories
//     foreach(range(1, 30) as $index)
//     {
//         Category::create([
//             'name' => $faker->word
//         ]);
//     }

// // pivot table
//     foreach(range(1, 50) as $index)
//     {
//         DB::table('category_user')->insert([
//             'category_id' => rand(1,30),
//             'user_id' => $faker->unique()->randomNumber(1, 100)
//         ]);
//     }
