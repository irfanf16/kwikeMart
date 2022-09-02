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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();



        Gate::define('Admin', function($user){
            return $user->hasRole('Admin');
        });
        Gate::define('Retailer', function($user){
            return $user->hasRole('Retailer');
        });
        Gate::define('Customer', function($user){
            return $user->hasRole('Customer');
        });
        Gate::define('Driver', function($user){
            return $user->hasRole('Driver');
        });
    }
}
