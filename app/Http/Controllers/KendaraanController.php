<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        return view('admin.admin-kendaraan.adminKendaraan', [
            "title" => "Admin Kelola Kendaraan",
            "data_kendaraan" => Kendaraan::all()
        ]);
    }
}
