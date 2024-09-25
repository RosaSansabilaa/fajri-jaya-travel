<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    public function index()
    {
        return view('admin.admin-jadwal.adminJadwalPerjalanan', [
            "title" => "Admin Kelola Jadwal Perjalanan",
            "data_jadwal" => Jadwal::all()
        ]);
    }
}
