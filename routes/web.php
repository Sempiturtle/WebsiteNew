<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Redirect root to dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Registration & login
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'LoginUser']);

// Logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Protected routes
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Tasks CRUD
    Route::resource('tasks', TaskController::class);

    // Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('about');
});
