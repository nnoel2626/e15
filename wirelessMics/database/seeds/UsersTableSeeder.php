<?php

use Illuminate\support\facades\Hash;
use Illuminate\Database\Seeder;
use App\Role;
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

        $users = [];

        // // $now = date('Y-m-d H:i:s');
        $admin = User::create([
            'name'  => 'Norcius Noel',
            // 'username' => 'Norcius',
            'email'  => 'mensah33@gmail.com',
            'password' => Hash::make('Admin'),

        ]);

        $staff = User::create([
            'name'  => 'Dave Harris',
            // 'username' => 'Dave',
            'email'  => 'daveh@staff.com',
            'password' => Hash::make('Staff'),


        ]);

        $user = User::create([
            'name'  => 'John do',
            // 'username' => 'John',
            'email'  => 'johnd@user.com',
            'password' => Hash::make('User'),

        ]);


        $tempWorker = User::create([
        'name'  => 'otto do',
        //    'username' => 'John',
            'email'  => 'johnd@temp.com',
            'password' => Hash::make('Temp'),

        ]);


        #retreive all different roles  from roles table
        $adminRole = Role::where('name', 'admin')->first();
        $staffRole = Role::where('name', 'staff')->first();
        $userRole = Role::where('name', 'user')->first();
        $tempWorkRole = Role::where('name', 'tempWorker')->first();

        #Attached the different roles to members
        $admin->roles()->attach($adminRole);
        $staff->roles()->attach($staffRole);
        $user->roles()->attach($userRole);
        $tempWorker->roles()->attach($tempWorkRole);


    }
}


