<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Schema;


class UserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */

       // use RefreshDatabase, WithFaker;

         /** @test */
    public function testUsersTableHasExpectedColumns()
    {
        $this->assertTrue(
          Schema::hasColumns('users', [
            'name', 'created_at', 'updated_at'
        ]), 1);
    }


    /** @test  */
    public function testUserBelongsToManyRoles()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $user->roles);
    }

}
