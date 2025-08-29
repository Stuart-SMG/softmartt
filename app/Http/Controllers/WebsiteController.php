<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\ApiRoutes;
use Illuminate\Support\Facades\Http;

class WebsiteController extends Controller
{

    public function index()
    {
        //
    }

  
       public function create()
    {

        $url = ApiRoutes::contact();
        $contact = null;

        $response  =Http::get($url);
        if($response->successful()){    
            $contact =  $response->json();
          
        }
     

       return view('welcome',);
    }

    public function login(Request $request)
{
    $url = ApiRoutes::login(); 
    $response = Http::post($url, [
        'email'    => $request->input('email'),
        'password' => $request->input('password'),
    ]);

    if ($response->successful()) {
        $data = $response->json();

  
        session(['api_token' => $data['token'] ?? null]);

        return redirect()->route('webhome')->with('success', 'Login successful!');
    } else {
        return back()->withErrors([
            'login' => 'Invalid credentials or API error.',
        ]);
    }
}


 
}