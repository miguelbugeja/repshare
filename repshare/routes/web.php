<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
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

    // Log out User
    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout.user');

    // My Workouts Page
    Route::get('/my-workouts', [AuthController::class, function() {
        return view('workouts.index');
    }])->name('workouts.index');

    // Profile Page
    Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile.show');

    // Edit Profile Page
    Route::get('/profile/edit', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    // Update Profile
    Route::put('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    // Change Password Page
    Route::get('/profile/change-password', [ProfileController::class, 'showChangePassword'])
        ->name('profile.password.edit');

    // Change Password
    Route::put('/profile/change-password', [ProfileController::class, 'changePassword'])
        ->name('profile.password.update');
});