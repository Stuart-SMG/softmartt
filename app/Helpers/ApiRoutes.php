<?php

namespace App\Helpers;

class ApiRoutes{

    public static function mainUrl(){
        return env('ENGINE_BASE_URL');
    }

    public static function baseUrl(){
        return self::mainUrl() . '/api';
    }

    public static function contact(){
        return self::baseUrl().'/contact';
    }

        public static function login(){
        return self::baseUrl().'/login';
    }

    
}