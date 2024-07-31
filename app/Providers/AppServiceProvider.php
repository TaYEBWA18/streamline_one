<?php

namespace App\Providers;

use App\Observers\PatientsObserver;

use App\Models\Patient;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Patient::observe(PatientsObserver::class);
        
    }
}
