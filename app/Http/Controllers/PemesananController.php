<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        return view('admin.admin-pemesanan.adminPemesanan', [
            "title" => "Admin Kelola Pemesanan",
            "data_pemesanan" => Pemesanan::all(),
            'status_pemesanan' => 'Menunggu konfirmasi' // Set status default
        ]);
    }

    public function show(Pemesanan $pemesanan) //Pemesanan -> nama model, $pemesanan -> harus sama dengan yang ada pada route
    {
        return view('admin.admin-pemesanan.adminDetailPemesanan', [
            "title" => "Admin Kelola Pemesanan",
            "item_pemesanan" => $pemesanan,
            'status_pemesanan' => 'Menunggu konfirmasi' // Set status default
        ]);
    }
}
