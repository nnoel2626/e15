<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserSeeder::class);
        //$this->cleanDatabase();
        //$this->call(LocationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        // $this->call(TagsTableSeeder::class);
        // $this->call(TableSeeder::class);
        //$this->call(MicrophonesTableSeeder::class);

    }
}
