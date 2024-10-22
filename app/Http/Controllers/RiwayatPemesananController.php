<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemesanan;
use App\Models\Pemesanan;

class RiwayatPemesananController extends Controller
{
    public function index()
    {
        return view('admin.admin-riwayat.adminRiwayatPemesanan', [
            "title" => "Admin Kelola Riwayat Pemesanan",
            "riwayat_pemesanans" => RiwayatPemesanan::with('Pemesanan')->get(), 
            // "riwayat_pemesanans" => RiwayatPemesanan::all(),
            // "pemesanans" => Pemesanan::all()
        ]);
    }
}
