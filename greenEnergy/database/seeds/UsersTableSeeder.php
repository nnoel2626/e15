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
        [
         'name'  => 'Norcius Noel',
         'email'  => 'mensah33@gmail.com'
        ],
        ['password' => \Hash::make('Admin')
        ]);


        $admin = User::updateOrCreate(
        [
         'name' => 'Jill Harvard',
         'email' => 'jill@harvard.edu'
        ],
        ['password' => \Hash::make('Admin')
        ]);



        $owner = User::updateOrCreate(
            [
            'name'  => 'Dave Harris',
            'email'  => 'daveh@owner.com'
            ],
            ['password' => \Hash::make('Owner')
        ]);


         $staff = User::updateOrCreate(
            [
                'name' => 'Jamal Harvard',
                'email' => 'jamal@harvard.edu'
            ],
            ['password' => \Hash::make('Staff')
        ]);


        $staff = User::updateOrCreate(
            [
             'name'  => 'John Staff',
            // 'username' => 'John',
             'email'  => 'johns@user.com'
            ],
            ['password' => \Hash::make('Staff')
        ]);


        $client = User::updateOrCreate(
            [
            'name'  => 'client John',
            //    'username' => 'John',
            'email'  => 'john@client.com'
            ],
            ['password' => \Hash::make('Client')

        ]);

        $distributor = User::updateOrCreate(
            ['name'  => 'Jean Distributor',
        //    'username' => 'John',
            'email'  => 'jeand@distributor.com'],
            ['password' => \Hash::make('Distributor')

        ]);


        #retreive all different roles  from roles table
        $adminRole = Role::where('name', 'admin')->first();
        $ownerRole = Role::where('name', 'owner')->first();
        $staffRole = Role::where('name', 'staff')->first();
        $clientRole = Role::where('name', 'client')->first();
        $distributorRole = Role::where('name', 'distributo')->first();

        #Attached the different roles to members
        $admin->roles()->attach($adminRole);
        $owner->roles()->attach($ownerRole);
        $staff->roles()->attach($staffRole);
        $client->roles()->attach($clientRole);
        $distributor->roles()->attach($distributorRole);

    }
}












