<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Tag::create(['name' => 'Installed']);
        Tag::create(['name' => 'Portable']);
        Tag::create(['name' => 'Roaming']);
        Tag::create(['name' => 'Special Event']);
    }
}
