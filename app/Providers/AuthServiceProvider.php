<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //['Admin','Client']
        // Gate Admin
        Gate::define('Admin', function (User $user) {
            return $user->type === 'Admin';
        });
        // Gate Pet Owner
        Gate::define('Client', function (User $user) {
            return $user->type === 'Client';
        });
    }
}
