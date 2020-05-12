<?php

namespace Tests\Browser;
use App\Role;
use App\User;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Schema;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RoleTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
  


    /** @test */
    public function testRolesTableHasExpectedColumns()
    {
        $this->assertTrue(
          Schema::hasColumns('roles', [
            'name', 'created_at', 'updated_at'
        ]), 1);
    }

    /** @test */
    public function testRoleBelongsToManyUsers()
    {
        $user = factory(User::class)->create();
        $role = factory(Role::class)->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $role->users);
    }
}
