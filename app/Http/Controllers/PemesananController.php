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
            "data_pemesanan" => Pemesanan::all()
        ]);
    }

    public function show($slug)
    {
        return view('admin.admin-pemesanan.adminDetailPemesanan', [
            "title" => "Admin Kelola Pemesanan",
            "item_pemesanan" => Pemesanan::find($slug)
        ]);
    }
}
