<?php

namespace Tests\Browser;

use App\Microphone;
use App\Tag;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TagTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
  


    /** @test */
    public function testTagsTableHasExpectedColumns()
    {
        $this->assertTrue(
          Schema::hasColumns('tags', [
            'name', 'created_at', 'updated_at'
        ]), 1);
    }

    /** @test */
    public function testTagBelongsToManyMicrophones()
    {
        $microphone = factory(Microphone::class)->create();
        $tag = factory(Tag::class)->create();

         $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $microphone->tags);
    }
}

