<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (auth()->check()) {
            $user = auth()->user();

            View::share('authUser', $user);
            View::share('userPermissions', $user->role?->permissions->pluck('name') ?? []);
        }
    }
}
