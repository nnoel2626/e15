<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::updateOrCreate(
        ['email' => 'mensah33@gmail.com', 'name' => 'Norciu Noel'],
        ['password' => Hash::make('helloworld')
        ]);
        $user = User::updateOrCreate(
        ['email' => 'jill@harvard.edu', 'name' => 'Jill Harvard'],
        ['password' => Hash::make('helloworld')
        ]);

        $user = User::updateOrCreate(
        ['email' => 'jamal@harvard.edu', 'name' => 'Jamal Harvard'],
        ['password' => Hash::make('helloworld')
        ]);
    }
}
