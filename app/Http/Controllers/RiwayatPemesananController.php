<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPemesanan;

class RiwayatPemesananController extends Controller
{
    public function index()
    {
        return view('admin.admin-riwayat.adminRiwayatPemesanan', [
            "title" => "Admin Kelola Riwayat Pemesanan",
            "data_pemesanan" => RiwayatPemesanan::all()
        ]);
    }
}
