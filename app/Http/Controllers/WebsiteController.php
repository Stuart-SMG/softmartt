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

   

 
}