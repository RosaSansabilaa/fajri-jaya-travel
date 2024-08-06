<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\adminDashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

/*
Route::get('/', function () {
    return view('beranda');
});
*/

Route::get('/', function () {
    return view('beranda');
})->name('beranda');

Route::get('/masuk', function () {
    return view('auth.login');
})->name('auth.login');

Route::get('/daftar', function () {
    return view('auth.register');
})->name('auth.register');

Route::get('/tentang-kami', function () {
    return view('aboutUs');
})->name('auth.aboutUs');

Route::get('/cari-jadwal', function () {
    return view('customer.cari-jadwal.cariJadwal');
})->name('customer.cariJadwal');

Route::get('/cari-jadwal/jadwal-perjalanan', function () {
    return view('customer.cari-jadwal.hasilCari');
})->name('customer.hasilCari');

Route::get('/cari-jadwal/jadwal-perjalanan/detail-pemesanan', function () {
    return view('customer.pemesanan.detailPemesanan');
})->name('customer.isiDetailPemesanan');

Route::get('/cari-jadwal/jadwal-perjalanan/detail-pemesanan/metode-pembayaran', function () {
    return view('customer.pemesanan.pilihMetodePembayaran');
})->name('customer.pilihMetodePembayaran');

Route::get('/cari-jadwal/jadwal-perjalanan/detail-pemesanan/metode-pembayaran/konfirmasi-pembayaran-transfer', function () {
    return view('customer.pemesanan.pembayaranTransfer');
})->name('customer.pembayaranTransfer');

Route::get('/cari-jadwal/jadwal-perjalanan/detail-pemesanan/metode-pembayaran/konfirmasi-pembayaran-cash', function () {
    return view('customer.pemesanan.pembayaranCash');
})->name('customer.pembayaranCash');

Route::get('/riwayat-pemesanan', function () {
    return view('customer.pemesanan.riwayatPemesanan');
})->name('customer.riwayatPemesanan');

Route::get('/riwayat-pemesanan/detail-pemesanan', function () {
    return view('customer.pemesanan.detailRiwayatPemesanan');
})->name('customer.detailRiwayatPemesanan');


Route::get('/admin/dashboard', function () {
    return view('admin/adminDashboard');
})->name('admin.dashboard');

// Route::get('/admin/pemesanan', function () {
//     return view('admin/admin-pemesanan/adminPemesanan');
// });

// Route::get('/admin/pemesanan/detail-pemesanan', function () {
//     return view('admin/admin-pemesanan/adminDetailPemesanan');
// });

Route::get('/admin/kelola-pemesanan', function () {
    return view('admin.admin-pemesanan.adminPemesanan');
})->name('admin.pemesanan');

Route::get('/admin/kelola-pemesanan/detail-pemesanan', function () {
    return view('admin.admin-pemesanan.adminDetailPemesanan');
})->name('admin.detailPemesanan');

Route::get('/admin/kelola-jadwal-perjalanan', function () {
    return view('admin.admin-jadwal.adminJadwalPerjalanan');
})->name('admin.jadwalPerjalanan');

Route::get('/admin/kelola-data-kendaraan', function () {
    return view('admin.admin-kendaraan.adminKendaraan');
})->name('admin.kendaraan');

Route::get('/admin/kelola-data-supir', function () {
    return view('admin.admin-supir.adminSupir');
})->name('admin.supir');

Route::get('/admin/riwayat-pemesanan', function () {
    return view('admin.admin-riwayat.adminRiwayatPemesanan');
})->name('admin.riwayatPemesanan');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//From chatgpt
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
// Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
