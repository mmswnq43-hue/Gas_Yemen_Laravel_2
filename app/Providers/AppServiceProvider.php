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

    public function boot(): void
    {
        \Illuminate\Support\Facades\Gate::define('viewApiDocs', function ($user = null) {
            // Allows everyone (including guests) to access API documentation in production
            return true;
        });
    }
}
