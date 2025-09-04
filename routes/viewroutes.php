<?php
use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('admin.create'); 
})->name('admin.create');


   Route::get('/welcome', function () {
        return view('admin.index');
    })->name('homee');

    
   Route::get('/admi', function () {
        return view('admin.allagents');
    })->name('all.agent');

        
   Route::get('/', function () {
        return view('admin.allcustomers');
    })->name('all.customer');