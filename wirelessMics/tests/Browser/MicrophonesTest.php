<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use Illuminate\Foundation\Testing\WithFaker;
use Faker\Generator as Faker;

use App\Microphone;
use App\User;
use App\Role;
use App\Tag;
use App\Location;
use Arr;
use Str;

class MicrophonesTest extends DuskTestCase
{
        use withFaker;

        /**
         *
         */
        public function testAddingMicrophone()
        {
            $this->browse(function (Browser $browser) {


                # generate three random words example green-park-balloon
                 $micSlug = $this->faker->words(rand(3, 6), true);
                # add dashes btween the words
                  $slug = Str::slug($micSlug, '-'); #
                # Create an Admin user to create a new Microphone. to access the back-end.
                 $user = factory(User::class)->state('withRole')->create();

                         $browser->loginAs($user->id)
                        ->visit('/admin/microphones/create')
                         ->assertSee('Create a Microphone')
                        ->type('slug', $slug)
                        ->select('location_id')
                        ->type('make', 'shure')
                        ->type( 'model','axient digital')
                        ->type('band','G57')
                        ->type('frequency_range', '470- 616 MHZ')
                        ->type('serial_number','12345678')
                        ->type('type', 'Lapel')
                        ->type( 'group', 'G5')
                        ->type( 'channel', 'CH243')
                        ->type('assigned_frequency','602.350 MHZ')
                        ->type('comments', 'This item is actually a test, and fulfills no requirement of any plan');
                        $browser->script('window.scrollTo(0, 400);');
                        $browser->press('Add microphone');
                        $browser->visit('/microphones/'.$slug)
                        ->assertSee('Microphone Details');
                    });

            }


                /**
                 *
                 */
                public function testAddingMicrophoneWithExistingSlug()
                {
                $this->browse(function (Browser $browser) {

                    # Generate an existing Microphone
                   $microphone = factory(Microphone::class)->state('withTag')->create();

                      # Create an Admin user to create a new Microphone. to access the back-end.
                    $user = factory(User::class)->state('withRole')->create();

                    $browser->loginAs($user->id)
                        ->visit('/admin/microphones/create')
                        ->assertSee('Create a Microphone')
                        ->value('@slug-input', $microphone->slug)# Existing Slug
                        ->select('location_id')
                        ->value('@make-input', $microphone->make)
                        ->value('@model-input', $microphone->model)
                        ->value('@band-input', $microphone->band)
                        ->value('@frequency_range-input', $microphone->frequency_range)
                        ->value('@serial_number-input', $microphone->serial_number)
                        ->value('@type-input', $microphone->type)
                        ->value('@group-input', $microphone->group)
                        ->value('@channel-input', $microphone->channel)
                        ->value('@assigned_frequency-input',$microphone->assigned_frequency)
                        ->value('@comments-input', $microphone->comments);
                       
                       #if element button is not visible on the page, the press command will not work
                         $browser->script('window.scrollTo(0, 400);');
                         $browser->press('@add-button')
                        ->assertPresent('@error-field-slug');
                     });
               }




            public function testEditingMicrophone()
            {
                $this->browse(function (Browser $browser) {

                # generate three random words example green-park-balloon
                 $micSlug = $this->faker->words(rand(3, 6), true);
                # add dashes btween the words
                  $slug = Str::slug($micSlug, '-'); #
                # Create an Admin user to create a new Microphone. to access the back-end.
                 $user = factory(User::class)->state('withRole')->create();

                  $browser->loginAs($user->id)
                        ->visit('/admin/microphones')
                        ->click('@edit-button')
                        ->type('slug', $slug)
                        ->type('serial_number', '12345678')
                        ->type('comments', 'This item is actually a test, and fulfills no requirement of any plan');
                       #if element button is not visible on the page, the press command will not work
                         $browser->script('window.scrollTo(0, 400);');
                         //$browser->press('@add-button')
                         $browser->press('@edit-button');
                        $browser->visit('/admin/microphones')

                         ->assertSee('Listing of Microphones');
                });

            }





}




