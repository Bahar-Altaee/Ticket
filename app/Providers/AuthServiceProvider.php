<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\User;

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

        Gate::before(function (User $user) {
            if ($user->isAdmin()) { // Assuming you have an `isAdmin()` method in your User model
                return true; // Grant full access to admin users
            }
        });
        
        Gate::define('approve-users', function (User $user) {
            return $user->hasRole('admin'); // Assuming you have a `hasRole()` method in your User model
        });
        //
    }
}
