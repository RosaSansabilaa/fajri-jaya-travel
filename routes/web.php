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

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('/', function () {
    return view('beranda');
});
*/

Route::get('/masuk', function () {
    return view('auth/login');
});

Route::get('/daftar', function () {
    return view('auth/register');
});

Route::get('/tentang-kami', function () {
    return view('about-us');
});

Route::get('/admin/dashboard', function () {
    return view('admin/adminDashboard');
});

Route::get('/admin/pemesanan', function () {
    return view('admin/admin-pemesanan/adminPemesanan');
});

Route::get('/admin/jadwal-perjalanan', function () {
    return view('admin/admin-jadwal/adminJadwalPerjalanan');
});

Route::get('/admin/kendaraan', function () {
    return view('admin/admin-kendaraan/adminKendaraan');
});

Route::get('/admin/supir', function () {
    return view('admin/admin-supir/adminSupir');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//From chatgpt
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
// Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
