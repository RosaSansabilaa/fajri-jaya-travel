<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Kendaraan;
use App\Models\Supir;

class JadwalController extends Controller
{
    public function index()
    {
        return view('admin.admin-jadwal.adminJadwalPerjalanan', [
            "title" => "Admin Kelola Jadwal Perjalanan",
            "jadwals" => Jadwal::all(),
            "kendaraans" => Kendaraan::all(),
            "supirs" => Supir::all()
        ]);
    }
}
