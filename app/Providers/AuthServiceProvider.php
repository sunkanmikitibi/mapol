<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        App\Officer::class => App\Policies\OfficerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //Gate for Authorizations
        Gate::define('superadmin', function($user){
            return $user->type == 'superadmin';
        });

        Gate::define('admin', function($user){
            if($user->type == 'admin') {
                return true;
            }
            return false;
        });

        Gate::define('user', function($user)
        {
            return $user->type == 'user';
        });
    }
}
