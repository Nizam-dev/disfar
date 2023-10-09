<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\DashboardController;


Route::get('/',[LandingPageController::class,'index'])->name('landingpage');
Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
