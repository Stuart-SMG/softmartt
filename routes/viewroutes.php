<?php
use Illuminate\Support\Facades\Route;


Route::get('/index', function () {
    return view('admin.create'); 
})->name('admin.create');