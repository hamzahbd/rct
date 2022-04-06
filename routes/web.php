<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/aboutus', [HomeController::class, 'aboutus']);

Route::get('/service', [HomeController::class, 'service']);

Route::get('/project', [HomeController::class, 'project']);

Route::get('/login', [HomeController::class, 'login']);

Route::get('/contact', [HomeController::class, 'contact']);

Route::post('/login', [HomeController::class, 'authenticate']);
Route::post('/logout', [HomeController::class, 'logout']);
