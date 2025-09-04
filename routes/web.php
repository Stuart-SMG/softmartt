<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebsiteController::class, 'create'])->name('home');


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');


Route::post('/login', [AuthController::class, 'login'])->name('apilogin');



// Route::middleware(['auth'])->group(function () {

    Route::get('/welcome', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// });

use App\Http\Controllers\LoginController;

Route::get('/login', [LoginController::class, 'create'])->name('login.form');
Route::post('/login',[LoginController::class, 'store'])->name(
    'login.submit'
);


Route::get('/agent', function(){
    return view('agent.index');
})->name('agent');

Route::get('/admin', function(){
    return view('admin.index');
})->name('admin');

require __DIR__ . '/websiteRoutes.php';
require __DIR__ . '/viewroutes.php';