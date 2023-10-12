<?php

use App\Http\Controllers\Admin\AkunController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\InformasiKambingController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\Peternak\TernakController;
use App\Http\Controllers\Peternak\PenjualanController;
use App\Http\Controllers\Peternak\DashboardController as PeternakDashboardController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\AuthController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('about', [LandingPageController::class, 'about']);
Route::get('edukasi', [EdukasiController::class, 'index']);
Route::get('kambing/{id}',[InformasiKambingController::class,'informasi']);
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postregister', [AuthController::class, 'postregister']);
Route::get('logout', [AuthController::class, 'logout']);

// Peternak
Route::prefix('peternak')->group(function () {

    Route::get('dashboard',[PeternakDashboardController::class,'index']);
    Route::get('ternak',[TernakController::class,'index']);
    Route::get('ternak/tambah',[TernakController::class,'tambah']);
    Route::post('ternak/tambah',[TernakController::class,'tambah_profil_kambing']);
    Route::get('ternak/edit/{id}',[TernakController::class,'edit_profil_kambing']);
    Route::post('ternak/edit/{id}',[TernakController::class,'update_profil_kambing']);
    Route::get('ternak/hapus/{id}',[TernakController::class,'hapus_profil_kambing']);
    Route::get('ternak/riwayat-reproduksi/{id}',[TernakController::class,'riwayat_reproduksi_kambing']);
    Route::post('ternak/riwayat-reproduksi/{id}',[TernakController::class,'tambah_riwayat_reproduksi_kambing']);
    Route::post('ternak/edit-riwayat-reproduksi/{id}',[TernakController::class,'edit_riwayat_reproduksi_kambing']);
    Route::get('ternak/riwayat-kesehatan/{id}',[TernakController::class,'riwayat_kesehatan_kambing']);
    Route::post('ternak/riwayat-kesehatan/{id}',[TernakController::class,'tambah_riwayat_kesehatan_kambing']);
    Route::post('ternak/edit-riwayat-kesehatan/{id}',[TernakController::class,'edit_riwayat_kesehatan_kambing']);
    Route::get('ternak/hapus-riwayat-kesehatan/{id}',[TernakController::class,'hapus_riwayat_kesehatan_kambing']);
    Route::get('ternak/hapus-riwayat-reproduksi/{id}',[TernakController::class,'hapus_riwayat_reproduksi_kambing']);
    Route::get('penjualan',[PenjualanController::class,'index']);
    Route::get('penjualan/tambah',[PenjualanController::class,'tambah']);
    Route::post('penjualan/tambah',[PenjualanController::class,'tambah_penjualan']);
    Route::get('penjualan/edit/{id}',[PenjualanController::class,'edit']);
    Route::post('penjualan/edit/{id}',[PenjualanController::class,'edit_penjualan']);
    Route::get('penjualan/hapus/{id}',[PenjualanController::class,'hapus']);


});

Route::prefix('admin')->group(function () {
    Route::get('dashboard',[PeternakDashboardController::class,'index']);
    Route::get('ternak',[TernakController::class,'index']);
    Route::get('ternak/tambah',[TernakController::class,'tambah']);
    Route::post('ternak/tambah',[TernakController::class,'tambah_profil_kambing']);
    Route::get('ternak/edit/{id}',[TernakController::class,'edit_profil_kambing']);
    Route::post('ternak/edit/{id}',[TernakController::class,'update_profil_kambing']);
    Route::get('ternak/hapus/{id}',[TernakController::class,'hapus_profil_kambing']);
    Route::get('ternak/riwayat-reproduksi/{id}',[TernakController::class,'riwayat_reproduksi_kambing']);
    Route::post('ternak/riwayat-reproduksi/{id}',[TernakController::class,'tambah_riwayat_reproduksi_kambing']);
    Route::post('ternak/edit-riwayat-reproduksi/{id}',[TernakController::class,'edit_riwayat_reproduksi_kambing']);
    Route::get('ternak/riwayat-kesehatan/{id}',[TernakController::class,'riwayat_kesehatan_kambing']);
    Route::post('ternak/riwayat-kesehatan/{id}',[TernakController::class,'tambah_riwayat_kesehatan_kambing']);
    Route::post('ternak/edit-riwayat-kesehatan/{id}',[TernakController::class,'edit_riwayat_kesehatan_kambing']);
    Route::get('ternak/hapus-riwayat-kesehatan/{id}',[TernakController::class,'hapus_riwayat_kesehatan_kambing']);
    Route::get('ternak/hapus-riwayat-reproduksi/{id}',[TernakController::class,'hapus_riwayat_reproduksi_kambing']);
    Route::get('penjualan',[PenjualanController::class,'index']);
    Route::get('penjualan/tambah',[PenjualanController::class,'tambah']);
    Route::post('penjualan/tambah',[PenjualanController::class,'tambah_penjualan']);
    Route::get('penjualan/edit/{id}',[PenjualanController::class,'edit']);
    Route::post('penjualan/edit/{id}',[PenjualanController::class,'edit_penjualan']);
    Route::get('penjualan/hapus/{id}',[PenjualanController::class,'hapus']);
    Route::get('verifikasi_akun',[AkunController::class,'index']);
    Route::get('edit-verifikasi_akun/{id}',[AkunController::class,'edit']);
    Route::post('update-verifikasi_akun/{id}',[AkunController::class,'update']);

    


});



