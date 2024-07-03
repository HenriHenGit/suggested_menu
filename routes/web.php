<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\SuggestedMenuController;
use App\Http\Controllers\OrderNutriController;
use App\Http\Controllers\MenuController;
use App\Models\Order_nutri;
use Illuminate\Support\Facades\Auth;

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

Route::get('/suggestMeal', [SuggestedMenuController::class, 'handle'])->name('suggestMeal.handle');
Route::post('/suggestMeal', [SuggestedMenuController::class, 'update'])->name('suggestMeal.update');
//Xử lý song "/suggestMeal" mới chạy được
Route::get('/menu', [MenuController::class, 'store'])->name('menu.store');
