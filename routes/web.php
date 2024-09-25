<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\adminDashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\SupirController;
use App\Http\Controllers\RiwayatPemesananController;
use App\Models\Jadwal;
use App\Models\Pemesanan;


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

Route::get('/', function () {
    return view('beranda', [
        "title" => "Beranda"
    ]);
})->name('beranda');

Route::get('/masuk', function () {
    return view('auth.login', [
        "title" => "Masuk"
    ]);
})->name('auth.login');

Route::get('/daftar', function () {
    return view('auth.register', [
        "title" => "Daftar"
    ]);
})->name('auth.register');

Route::get('/tentang-kami', function () {
    return view('aboutUs', [
        "title" => "Tentang Kami"
    ]);
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


// Admin Pages

Route::get('/admin', function () {
    return view('admin.admin-dashboard.adminDashboard', [
        "title" => "Admin Dashboard"
    ]);
})->name('admin.dashboard');

Route::get('/admin/kelola-pemesanan', [PemesananController::class, 'index'])->name('admin.pemesanan');

// Route::get('/admin/kelola-pemesanan/detail-pemesanan', function () {
Route::get('kelola-pemesanan/{slug}', [PemesananController::class, 'show']);
// ->name('admin.detailPemesanan');

Route::get('/admin/kelola-jadwal-perjalanan', [JadwalController::class, 'index'])->name('admin.jadwalPerjalanan');

Route::get('/admin/kelola-data-kendaraan', [KendaraanController::class, 'index'])->name('admin.kendaraan');

Route::get('/admin/kelola-data-supir', [SupirController::class, 'index'])->name('admin.supir');

Route::get('/admin/riwayat-pemesanan', [RiwayatPemesananController::class, 'index'])->name('admin.riwayatPemesanan');

// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//From chatgpt
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
// Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
