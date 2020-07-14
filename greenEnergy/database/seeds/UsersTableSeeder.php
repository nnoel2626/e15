<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
//use DB;
use Illuminate\Support\facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        //DB:table('role_user')->truncate();



        // // $now = date('Y-m-d H:i:s');
        $admin = User::updateOrCreate(
            ['name'  => 'Norcius Noel',
            'email'  => 'mensah33@gmail.com'],
            ['password' => \Hash::make('Admin')

        ]);

        $admin = User::updateOrCreate(
        [ 'name' => 'Jill Harvard',
        'email' => 'jill@harvard.edu'],
        ['password' => \Hash::make('helloworld')
        ]);



        $owner = User::updateOrCreate(
            [ 'name'  => 'Dave Harris',
            // 'username' => 'Dave',
            'email'  => 'daveh@owner.com'],
            ['password' => \Hash::make('Owner'),


        ]);

         $user = User::updateOrCreate(
        [ 'email' => 'jamal@harvard.edu',
        'name' => 'Jamal Harvard'],
        ['password' => \Hash::make('helloworld')
        ]);

        $user = User::updateOrCreate(
            ['name'  => 'John do',
            // 'username' => 'John',
            'email'  => 'johnd@user.com'],
            ['password' => \Hash::make('User')

        ]);


        $tempWorker = User::updateOrCreate(
            ['name'  => 'otto do',
        //    'username' => 'John',
            'email'  => 'johnd@temp.com'],
            ['password' => \Hash::make('Temp')

        ]);





        #retreive all different roles  from roles table
        $adminRole = Role::where('name', 'admin')->first();
        $ownerRole = Role::where('name', 'owner')->first();
        $userRole = Role::where('name', 'user')->first();
        $tempWorkRole = Role::where('name', 'tempWorker')->first();

        #Attached the different roles to members
        $admin->roles()->attach($adminRole);
        $owner->roles()->attach($ownerRole);
        $user->roles()->attach($userRole);
        $tempWorker->roles()->attach($tempWorkRole);


    }
}












