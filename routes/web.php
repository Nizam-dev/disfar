<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\InformasiKambingController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Peternak\TernakController;

use App\Http\Controllers\AuthController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('kambing/{id}',[InformasiKambingController::class,'informasi'])->name('kambing');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postregister', [AuthController::class, 'postregister']);
Route::get('logout', [AuthController::class, 'logout']);

Route::get('/peternak/dashboard', function () {
    return view('peternak.dashboard');
});

Route::get('/peternak/ternak',[TernakController::class,'index']);
Route::get('/peternak/ternak/tambah',[TernakController::class,'tambah']);
Route::post('/peternak/ternak/tambah',[TernakController::class,'tambah_profil_kambing']);
Route::get('/peternak/ternak/edit/{id}',[TernakController::class,'edit_profil_kambing']);
Route::post('/peternak/ternak/edit/{id}',[TernakController::class,'update_profil_kambing']);
Route::get('/peternak/ternak/hapus/{id}',[TernakController::class,'hapus_profil_kambing']);
Route::get('/peternak/ternak/riwayat-reproduksi/{id}',[TernakController::class,'riwayat_reproduksi_kambing']);
Route::post('/peternak/ternak/riwayat-reproduksi/{id}',[TernakController::class,'tambah_riwayat_reproduksi_kambing']);
Route::post('/peternak/ternak/edit-riwayat-reproduksi/{id}',[TernakController::class,'edit_riwayat_reproduksi_kambing']);
Route::get('/peternak/ternak/riwayat-kesehatan/{id}',[TernakController::class,'riwayat_kesehatan_kambing']);
Route::post('/peternak/ternak/riwayat-kesehatan/{id}',[TernakController::class,'tambah_riwayat_kesehatan_kambing']);
Route::post('/peternak/ternak/edit-riwayat-kesehatan/{id}',[TernakController::class,'edit_riwayat_kesehatan_kambing']);
Route::get('/peternak/ternak/hapus-riwayat-kesehatan/{id}',[TernakController::class,'hapus_riwayat_kesehatan_kambing']);
Route::get('/peternak/ternak/hapus-riwayat-reproduksi/{id}',[TernakController::class,'hapus_riwayat_reproduksi_kambing']);

