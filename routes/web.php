<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'web'])->group(function () {

    Route::controller(ChatController::class)->group(function () {
        Route::get('/', 'show');
        Route::post('/', 'store');
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'show')->name('register');
    Route::post('/register', 'register');
});
Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'show')->name('login');
    Route::post('/login', 'login');
});
Route::controller(GoogleController::class)->group(function () {
    Route::get('/redirect', 'redirect');
    Route::get('/callback', 'callback');
});
