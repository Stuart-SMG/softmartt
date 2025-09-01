<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       
        View::share('appName', config('app.name'));

      
    }

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
}