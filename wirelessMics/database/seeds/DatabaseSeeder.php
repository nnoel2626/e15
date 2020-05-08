<?php

use Illuminate\Database\Seeder;

use App\Microphone;
use App\Tag;
use App\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->cleanDatabase();
        $this->call(LocationsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(TagsTableSeeder::class);
        $this->call(TableSeeder::class);

        //$this->call(MicrophonesTableSeeder::class);




    }
}
