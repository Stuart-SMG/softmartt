<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Helpers\ApiRoutes;

class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        return view('auth.login'); // your login blade
    }

    /**
     * Handle login via API
     */
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        // Call login API
        $response = Http::post(ApiRoutes::login(), [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            $data = $response->json();

       
            Session::put('api_token', $data['token'] ?? null);
            Session::put('user', $data['user'] ?? null);

            return redirect()->route('dashboard'); 
        }

        return back()->withErrors([
            'email' => 'Login failed, check your credentials.',
        ])->withInput();
    }

    /**
     * Logout
     */
    public function logout()
    {
        Session::forget('api_token');
        Session::forget('user');

        return redirect()->route('login');
    }
}