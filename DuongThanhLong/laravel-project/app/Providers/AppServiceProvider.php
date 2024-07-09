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
        $this->app->bind(
            'App\Repositories\AuthRepositoryInterface',
            'App\Repositories\AuthRepositoryEloquent'
        );

        $this->app->bind(
            'App\Services\AuthServiceInterface',
            'App\Services\AuthService'
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
