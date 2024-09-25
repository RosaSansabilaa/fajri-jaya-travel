<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supir;

class SupirController extends Controller
{
    public function index()
    {
        return view('admin.admin-supir.adminSupir', [
            "title" => "Admin Kelola Supir",
            "data_supir" => Supir::all()
        ]);
    }
}
