<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use App\Helpers\ApiRoutes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; 
use App\Models\User; 




class AuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        return view('auth.login'); 
    }

    /**
     * Handle login via API
     */
 public function login(Request $request)
{
    // Validate request
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    // Try to find the user
    $user = User::where('email', $request->email)->first();

    // Email not found
    if (!$user) {
        return response()->json([
            'status' => 'error',
            'message' => 'Email not found. Please register first.'
        ], 404);
    }

    // Wrong password
    if (!Hash::check($request->password, $user->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Incorrect password. Try again.'
        ], 401);
    }

    // Successful login
    Auth::login($user);

    return response()->json([
        'status' => 'success',
        'message' => 'Welcome back, ' . $user->name . '!',
        'token' => $user->createToken('API Token')->plainTextToken 
    ]);
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