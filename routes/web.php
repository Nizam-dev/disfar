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
use App\Http\Controllers\Peternak\EdukasiTernakController;

Route::get('/', [LandingPageController::class, 'index']);
Route::get('about', [LandingPageController::class, 'about']);
Route::get('edukasi', [EdukasiController::class, 'index']);
Route::get('edukasi/{id}', [EdukasiController::class, 'detail']);
Route::get('kambing/{id}',[InformasiKambingController::class,'informasi']);
// Route::get('/login', function () {
//     return view('auth.login');
// });

Route::get('/register', function () {
    return view('auth.register');
});
Route::get('login', [AuthController::class, 'login']);
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postlogin', [AuthController::class, 'postlogin']);
Route::post('postregister', [AuthController::class, 'postregister']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/lupa-password', function () {
    return view('auth.lupa_password');
});
Route::post('/lupa_password', [AuthController::class, 'lupa_password_post'])->name('lupa_password');
Route::get('/password_baru/{id}', [AuthController::class, 'password_baru'])->name('password_baru');
Route::post('/password_baru/{id}', [AuthController::class, 'password_baru_post'])->name('password_baru');
// Peternak
Route::middleware(['role:peternak'])->group(function () {  
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
    Route::get('ternak/detail/{id}',[TernakController::class,'detail_ternak']);
    Route::get('penjualan',[PenjualanController::class,'index']);
    Route::get('penjualan/tambah',[PenjualanController::class,'tambah']);
    Route::post('penjualan/tambah',[PenjualanController::class,'tambah_penjualan']);
    Route::get('penjualan/edit/{id}',[PenjualanController::class,'edit']);
    Route::post('penjualan/edit/{id}',[PenjualanController::class,'edit_penjualan']);
    Route::get('penjualan/hapus/{id}',[PenjualanController::class,'hapus']);

    Route::get('kelolaedukasi',[EdukasiTernakController::class,'index']);
    Route::get('kelolaedukasi/tambah',[EdukasiTernakController::class,'tambah']);
    Route::post('kelolaedukasi/tambah',[EdukasiTernakController::class,'tambah_edukasi']);
    Route::get('kelolaedukasi/edit/{id}',[EdukasiTernakController::class,'edit']);
    Route::post('kelolaedukasi/edit/{id}',[EdukasiTernakController::class,'edit_edukasi']);
    Route::get('kelolaedukasi/hapus/{id}',[EdukasiTernakController::class,'hapus']);

    Route::get('profil',[AuthController::class,'getprofil']);
    Route::post('profil',[AuthController::class,'profile_update']);
    Route::get('profile/ganti-password', [AuthController::class,'ganti_password'])->name('user.ganti_password');
    Route::post('profile/ganti-password', [AuthController::class,'update_password'])->name('user.ganti_password.update');


});
});
Route::middleware(['role:admin'])->group(function () {  
Route::prefix('admin')->group(function () {
    Route::get('dashboard',[DashboardController::class,'index']);
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
    Route::get('ternak/detail/{id}',[TernakController::class,'detail_ternak']);
    Route::get('penjualan',[PenjualanController::class,'index']);
    Route::get('penjualan/tambah',[PenjualanController::class,'tambah']);
    Route::post('penjualan/tambah',[PenjualanController::class,'tambah_penjualan']);
    Route::get('penjualan/edit/{id}',[PenjualanController::class,'edit']);
    Route::post('penjualan/edit/{id}',[PenjualanController::class,'edit_penjualan']);
    Route::get('penjualan/hapus/{id}',[PenjualanController::class,'hapus']);
    Route::get('verifikasi_akun',[AkunController::class,'index']);
    Route::get('edit-verifikasi_akun/{id}',[AkunController::class,'edit']);
    Route::post('update-verifikasi_akun/{id}',[AkunController::class,'update']);
    
    Route::get('kelolaedukasi',[EdukasiTernakController::class,'index']);
    Route::get('kelolaedukasi/tambah',[EdukasiTernakController::class,'tambah']);
    Route::post('kelolaedukasi/tambah',[EdukasiTernakController::class,'tambah_edukasi']);
    Route::get('kelolaedukasi/edit/{id}',[EdukasiTernakController::class,'edit']);
    Route::post('kelolaedukasi/edit/{id}',[EdukasiTernakController::class,'edit_edukasi']);
    Route::get('kelolaedukasi/hapus/{id}',[EdukasiTernakController::class,'hapus']);

});

});



