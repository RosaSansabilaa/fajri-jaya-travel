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


Route::get('/admin', function () {
    return view('admin.admin-dashboard.adminDashboard', [
        "title" => "Admin Dashboard"
    ]);
})->name('admin.dashboard');

Route::get('/admin/kelola-pemesanan', function () {
    return view('admin.admin-pemesanan.adminPemesanan', [
        "title" => "Admin Kelola Pemesanan"
    ]);
})->name('admin.pemesanan');

Route::get('/admin/kelola-pemesanan/detail-pemesanan', function () {
    return view('admin.admin-pemesanan.adminDetailPemesanan', [
        "title" => "Admin Kelola Pemesanan"
    ]);
})->name('admin.detailPemesanan');

Route::get('/admin/kelola-jadwal-perjalanan', function () {
    $jadwal = [
        [
            "jadwal_id" => "1",
            "tanggal_berangkat" => "2024-10-30",
            "jam_berangkat" => "08:30",
            "asal" => "Mataram",
            "tujuan" => "Sumbawa Besar",
            "kendaraan" => "EA1334DW ",
            "supir" => "Mulyono",
            "kapasitas" => "15",
            "kursi_dipesan" => "10",
            "harga" => "140.000"
        ],
        [
            "jadwal_id" => "2",
            "tanggal_berangkat" => "2024-09-21",
            "jam_berangkat" => "13:30",
            "asal" => "Taliwang",
            "tujuan" => "Mataram",
            "kendaraan" => "EA1334AA ",
            "supir" => "Mulyadi",
            "kapasitas" => "15",
            "kursi_dipesan" => "5",
            "harga" => "200.000"
        ]
    ];

    return view('admin.admin-jadwal.adminJadwalPerjalanan', [
        "title" => "Admin Kelola Jadwal Perjalanan",
        "data_jadwal" => $jadwal
    ]);
})->name('admin.jadwalPerjalanan');


Route::get('/admin/kelola-data-kendaraan', function () {
    $kendaraan = [
        [
            "kendaraan_id" => "1",
            "nomor_plat" => "EA1234DW",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ],
        [
            "kendaraan_id" => "2",
            "nomor_plat" => "EA1334DW",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ],
        [
            "kendaraan_id" => "3",
            "nomor_plat" => "EA1334AA",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ]
    ];

    return view('admin.admin-kendaraan.adminKendaraan', [
        "title" => "Admin Kelola Kendaraan",
        "data_kendaraan" => $kendaraan
    ]);
})->name('admin.kendaraan');

Route::get('/admin/kelola-data-supir', function () {
    $supir = [
        [
            "supir_id" => "1",
            "nama" => "Mulyono",
            "no_hp" => "081212222178",
            "alamat" => "Mataram",
            "username" => "mulyono",
            "password" => "mulyono123"
        ],
        [
            "supir_id" => "2",
            "nama" => "Mulyadi",
            "no_hp" => "081212222100",
            "alamat" => "Sumbawa",
            "username" => "mulyadi",
            "password" => "mulyadi123"
        ],
    ];

    return view('admin.admin-supir.adminSupir', [
        "title" => "Admin Kelola Supir",
        "data_supir" => $supir
    ]);
})->name('admin.supir');

Route::get('/admin/riwayat-pemesanan', function () {
    return view('admin.admin-riwayat.adminRiwayatPemesanan', [
        "title" => "Admin Kelola Riwayat Pemesanan"
    ]);
})->name('admin.riwayatPemesanan');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//From chatgpt
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
// Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
// Route::get('/admin/dashboard', [adminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('auth');
