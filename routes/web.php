<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/',[WebsiteController::class, 'create']);


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

Route::get('welcome',function(){
    return view('dashboardd');
})->name('dashboardd');

Route::get('/account',function(){
    return view('website.account');
} )->name('account');



require __DIR__.'/websiteRoutes.php';