<?php

namespace Tests\Browser;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use App\Microphone;
use App\User;
use App\Role;
use App\Tag;
use App\Location;



class ListTest extends DuskTestCase
{
    /**
     *
     */
    public function testMicrophoneList()
    {
        $this->browse(function (Browser $browser) {

            $microphone = factory(Microphone::class)->state('withTag')->create();

            $user = factory(User::class)->state('withRole')->create();

            $browser->loginAs($user->id)
                    ->visit('/admin/microphones')
                    ->assertSee('Listing of Microphones');
        });
    }


    /**
     *
     */
    public function testLocationList()
    {
        $this->browse(function (Browser $browser) {

        $location = factory(Location::class)->create();
        $user = factory(User::class)->state('withRole')->create();

            $browser->loginAs($user->id)
                    ->visit('/admin/locations')
                    ->assertSee('Listing of Locations');
        });
    }

    /**
     *
     */
    public function testTagList()
    {
        $this->browse(function (Browser $browser) {
            $tag = factory(Tag::class)->create();
            $user = factory(User::class)->state('withRole')->create();

            $browser->loginAs($user->id)
                    ->visit('/admin/tags')
                    ->assertSee($tag->name);
        });
    }

    /**
     *
     */
    public function testRoleList()
    {
        $this->browse(function (Browser $browser) {
            $role = factory(Role::class)->create();
            $user = factory(User::class)->state('withRole')->create();

            $browser->loginAs($user->id)
                    ->visit('/admin/roles')
                    ->assertSee($role->name);
        });
    }

}
