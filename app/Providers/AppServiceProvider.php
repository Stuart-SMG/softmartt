<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use App\Helpers\ApiRoutes;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;


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
        $contact = null;

    $response = Http::get(ApiRoutes::contact());
    if ($response->successful()) {
        $contact = $response->json();
    }


    View::share('contact', $contact);
    }
}