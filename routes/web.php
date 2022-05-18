<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/news', [HomeController::class, 'news']);

Route::get('/', [HomeController::class, 'home']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/aboutus', [HomeController::class, 'aboutus']);

Route::get('/service', [HomeController::class, 'service']);

Route::get('/project', [HomeController::class, 'project']);

Route::get('/login', [HomeController::class, 'login'])->middleware('guest');

Route::get('/sign-up', [HomeController::class, 'signup'])->middleware('guest');

Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/products', [HomeController::class, 'products']);



Route::get('/product-details/{product:slug}', [HomeController::class, 'product_detail']);

Route::get('/cart', [HomeController::class, 'cart'])->middleware('auth');

Route::post('/product-details/{product:slug}/addToCart', [ProductController::class, 'addToCart'])->middleware('auth');
Route::delete('/cart/{product:slug}/removeFromCart', [ProductController::class, 'removeFromCart'])->middleware('auth');

// Login dan Register

Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::post('/sign-up', [UserController::class, 'store'])->middleware('guest');


// Admin Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('is_admin');

Route::resource('/dashboard/project', ProjectController::class)->middleware('is_admin');
Route::resource('/dashboard/product', ProductController::class)->middleware('is_admin');

// Profile
Route::get('/profile/{user:id}', [UserController::class, 'show'])->middleware('auth');
Route::post('/profile/{user:id}', [UserController::class, 'update'])->middleware('auth');
Route::get('/profile/{user:id}/alamat', [UserController::class, 'alamat'])->middleware('auth');
Route::post('/profile/{user:id}/alamat', [UserController::class, 'alamat_edit'])->middleware('auth');
Route::get('/profile/{user:id}/pesanan', [UserController::class, 'pesanan'])->middleware('auth');
Route::get('/profile/{user:id}/ubah-password', [UserController::class, 'ubah_password'])->middleware('auth');
Route::post('/profile/{user:id}/ubah-password', [UserController::class, 'ubah_password_fun'])->middleware('auth');

// Google login
Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'handleGoogleCallback']);

// -----------------------------forget password ------------------------------
// Route::get('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@getEmail')->name('forget-password');
// Route::post('forget-password', 'App\Http\Controllers\Auth\ForgotPasswordController@postEmail')->name('forget-password');

// Route::get('reset-password/{token}', 'App\Http\Controllers\Auth\ResetPasswordController@getPassword');
// Route::post('reset-password', 'App\Http\Controllers\Auth\ResetPasswordController@updatePassword');
