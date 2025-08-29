<?php

namespace App\Http\Controllers;

use App\Helpers\ApiRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index(){
        return 'login';
    }

    public function store(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password'=> 'required|string'
        ]);        

        $data = [
            'email' => $request->email,
            'password'=> $request->password
        ];

        $url = ApiRoutes::login();
        $response = Http::post($url, $data);
        if($response->successful()){
            return $response->json();

            // [
            //     'token'=> ,'
            //     ;user'
            // ]
        }
        
    }
}