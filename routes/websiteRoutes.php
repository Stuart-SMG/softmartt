<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController; // fixed namespace

// Home route using WebsiteController
Route::get('/', [WebsiteController::class, 'create'])->name('webhome');

// Other static view routes
Route::get('/dashboard/business', function () {
    return view('website.business'); 
})->name('webbusiness');

Route::get('/services', function () {
    return view('website.service'); 
})->name('webservice');

Route::get('/charity', function () {
    return view('website.charity'); 
})->name('webcharity');

Route::get('/jobs', function () {
    return view('website.jobs'); 
})->name('webjob');

Route::get('/experts', function () {
    return view('website.experty'); 
})->name('webexperty');

Route::get('/about', function () {
    return view('website.about'); 
})->name('webabout');


Route::post('/login', [WebsiteController::class, 'login'])->name('apilogin');