<?php

use App\Http\Controllers\AuthController;
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

// Home Page
Route::get('/', function () {
    return view('home');
});

// Unauthenticated Routes
Route::middleware('guest')->group(function(){

    // Register Page
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');


    // Register User
    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.user');

    // Login Page
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');
    
    // Login User
    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.user');
});

// Authenticated Routes
Route::middleware('auth')->group(function(){

    //Logout User
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');

});