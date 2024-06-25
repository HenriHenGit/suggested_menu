<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/admin', function () {
    return view('admin');
});





Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');