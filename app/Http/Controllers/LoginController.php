<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){
        return view('login');
    }


    public function store(Request $request){
        // $request->validate([
        //     'email' => 'required|email', 
        //     'password' => 'required|string|min:6'
        // ]);
        flash()->success('This is a success message');


        
    }
}