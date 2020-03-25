<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        # Gate to be apply to the route to manage all non-admin users
        Gate::define('manage-users', function ($user) {
            return $user->hasAnyRoles(['admin','staff']);
        });

        #Current needs to be to have an AdminRole in order to edit users
        Gate::define('edit-users', function ($user) {
            return $user->hasAnyRoles(['admin', 'staff']);
        });

        #Current needs to be to have an AdminRole in order to delete users
        Gate::define('delete-users', function ($user) {
            return $user->hasRole('admin');
        });
    }
}
