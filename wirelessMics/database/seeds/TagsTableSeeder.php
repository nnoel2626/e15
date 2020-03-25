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
        Tag::create(['tag_name' => 'Installed']);
        Tag::create(['tag_name' => 'Portable']);
        Tag::create(['tag_name' => 'Roaming']);
        Tag::create(['tag_name' => 'Special Event']);
    }
}
