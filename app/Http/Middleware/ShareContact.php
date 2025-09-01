<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use App\Helpers\ApiRoutes;

class ShareContact
{
    public function handle(Request $request, Closure $next)
    {
        $contact = Cache::remember('contact_data', 3600, function () {
            $response = Http::get(ApiRoutes::contact());
            return $response->successful() ? $response->json() : null;
        });

        View::share('contact', $contact);

        return $next($request);
    }
}