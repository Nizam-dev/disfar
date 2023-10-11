<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postregister', [AuthController::class, 'postregister']);
Route::get('/peternak/dashboard', function () {
    return view('peternak.dashboard');
});
