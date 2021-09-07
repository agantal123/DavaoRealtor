<?php

namespace App\Providers;
use App\Models\User;

use App\Models\listingservices;
use App\Policy\ListingPolicy;
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
        listingservices::class => ListingPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        
        Gate::define('isAdmin', function ($user)
        {
            return $user->isAdmin();
        });
        //
        // Gate::define( ability: 'create_listing' , function (User $user)
        // {
        //     return $user->role_type == 3;
        // });
    }
}
