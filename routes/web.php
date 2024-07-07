<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialController;
use App\Http\Controllers\SuggestedMenuController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FoodController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});





Route::get('/guide', function () {
    return view('guide');
});





Route::get('auth/{provider}', [SocialController::class, 'redirectToProvider'])->name('social.redirect');
Route::get('auth/{provider}/callback', [SocialController::class, 'handleProviderCallback']);


// Authentication Routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);


// Route cho admin dashboard
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
});

// Route cho user dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Đề xuất thực đơn
Route::get('/suggestMeal', [SuggestedMenuController::class, 'handle'])->name('suggestMeal.handle');
Route::post('/suggestMeal', [SuggestedMenuController::class, 'update'])->name('suggestMeal.update');
//Xử lý song "/suggestMeal" mới chạy được
Route::get('/menu', [MenuController::class, 'store'])->name('menu.store');

//Thêm xóa sửa Food
Route::get('/adminFood', [FoodController::class, 'index'])->name('adminFood.index');

Auth::routes(['verify' => true]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
