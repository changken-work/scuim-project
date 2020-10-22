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

        Gate::define('customers', function ($user){
            return $user->userable_type === 'customers';
        });

        Gate::define('vendors', function ($user){
            return $user->userable_type === 'vendors';
        });

        Gate::define('factories', function ($user){
            return $user->userable_type === 'factories';
        });

        Gate::define('admins', function ($user){
            return $user->userable_type === 'admins';
        });
    }
}
