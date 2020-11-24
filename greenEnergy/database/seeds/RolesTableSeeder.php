<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


        public function run()
    {
          Role::truncate();
        // DB::table('roles')->truncate();
        
        //Global access---------//
        Role::create(['name' => 'admin']);

        Role::create(['name' => 'owner']);

         //client and staff access---------//
        Role::create(['name' => 'client']);

         //Distributor and staff access---------//
        Role::create(['name' => 'distributor']);

         //any staff access---------//
         Role::create(['name' => 'staff']);

        // Role::create(['name' => 'tempWorker']);
    }
}
