<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;
use App\Role;

class PageTest extends DuskTestCase
{


     /**
     *
     */
    public function testWelcomePage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Wireless Microphones Inventory');

        });
    }


     /**
     *
     */
    public function testSupportPage()
    {
      $this->browse(function (Browser $browser) {
        $user = factory(User::class)->state('withRole')->create();

        $browser->loginAs($user->id);

        $browser->visit('/support')
                    ->assertSee('Email:support@wirelessMics.com');
        });
    }


      /**
     *
     */
    public function testAllMicrophonesPage()
    {
      $this->browse(function (Browser $browser) {
      $user = factory(User::class)->state('withRole')->create();

      $browser->loginAs($user->id);

      $browser->visit('/microphones')
                ->assertSee('All Microphones');
        });
    }


      /**
     *
     */
    public function testInstalledMicrophonesPage()
    {
      $this->browse(function (Browser $browser) {
      $user = factory(User::class)->state('withRole')->create();

      $browser->loginAs($user->id);

      $browser->visit('/installed')
                 ->assertSee('Installed Wireless Microphones');
        });
    }

      /**
     *
     */
    public function testPortableMicrophonesPage()
    {
      $this->browse(function (Browser $browser) {
      $user = factory(User::class)->state('withRole')->create();

      $browser->loginAs($user->id);

      $browser->visit('/portable')
                 ->assertSee('Portable Microphones');
        });
    }




}
