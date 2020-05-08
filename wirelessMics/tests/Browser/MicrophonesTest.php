<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

use Illuminate\Foundation\Testing\WithFaker;


use App\Microphone;
use App\User;

class MicrophonesTest extends DuskTestCase
{



    use withFaker;
   // use DatabaseMigrations;

    /**
     *
     */
    public function testLoadingMicrophoneWithTags()
    {
        $this->browse(function (Browser $browser) {
            $microphone = factory(Microphone::class)->create();

            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/Microphones/' . $microphone->slug)
                    ->assertSee($microphone->title)
                    ->assertPresent('@author-info');
        });
    }

    /**
     *
     */
    public function testLoadingMicrophoneWithNoAuthor()
    {
        $this->browse(function (Browser $browser) {
            $microphone = factory(Microphone::class)->states('withUser', 'withoutAuthor')->create();

            $user = $microphone->users()->first();

            $browser->loginAs($user->id)
                    ->visit('/Microphones/' . $microphone->slug)
                    ->assertMissing('@author-info');
        });
    }

    /**
     *
     */
    public function testAddingMicrophone()
    {
        $this->browse(function (Browser $browser) {

            # Let our Microphone factory generate a Microphone for us
            $microphone = factory(Microphone::class)->states('withoutAuthor')->create();

            # We'll grab the data from this Microphone to fill in the form
            $data = $microphone->toArray();

            # And delete it so it won't conflict with what we're about to add
            $microphone->delete();

            # Create a user to create a new Microphone as
            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/Microphones/create')
                    ->value('@slug-input', $data['slug'])
                    ->value('@title-input', $data['title'])
                    ->value('@published-year-input', $data['published_year'])
                    ->value('@cover-url-input', $data['cover_url'])
                    ->value('@info-url-input', $data['info_url'])
                    ->value('@purchase-url-input', $data['purchase_url'])
                    ->value('@description-input', $data['description'])
                    ->click('@add-button')
                    ->assertPathIs('/Microphones/'.$data['slug'])
                    ->assertSeeIn('@Microphone-title-heading', $microphone['title']);
        });
    }

    /**
     *
     */
    public function testAddingMicrophoneWithExistingSlug()
    {
        $this->browse(function (Browser $browser) {

            # Generate an existing Microphone
            $microphone = factory(Microphone::class)->create();

            # Create a user to create a new Microphone as
            $user = factory(User::class)->create();

            $browser->loginAs($user->id)
                    ->visit('/Microphones/create')
                    ->value('@slug-input', $microphone->slug) # Existing Slug
                    ->value('@title-input', $microphone->title)
                    ->value('@published-year-input', $microphone->published_year)
                    ->value('@cover-url-input', $microphone->cover_url)
                    ->value('@info-url-input', $microphone->info_url)
                    ->value('@purchase-url-input', $microphone->purchase_url)
                    ->value('@description-input', $microphone->description)
                    ->click('@add-button')
                    ->assertPresent('@error-field-slug');
        });
    }
}

