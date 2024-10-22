<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Pemesanan;
use App\Models\RiwayatPemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        return view('admin.admin-pemesanan.adminPemesanan', [
            "title" => "Admin Kelola Pemesanan",
            "pemesanans" => Pemesanan::all(),
            'status_pemesanan' => 'Menunggu konfirmasi' // Set status default
        ]);
    }

    public function show(Pemesanan $pemesanan) //Pemesanan -> nama model, $pemesanan -> harus sama dengan yang ada pada route
    {
        return view('admin.admin-pemesanan.adminDetailPemesanan', [
            "title" => "Admin Kelola Pemesanan",
            "pemesanan" => $pemesanan,
            'status_pemesanan' => 'Menunggu konfirmasi' // Set status default
        ]);
    }

    // Menangani konfirmasi pemesanan
    public function confirm($id)
    {
        // Mengambil data pemesanan berdasarkan id
        $pemesanan = Pemesanan::findOrFail($id);
        // $pemesanan->status_pemesanan = 'Terkonfirmasi';
        // $pemesanan->save();

        // Pindahkan ke riwayat
        RiwayatPemesanan::create([
            'pemesanan_id' => $pemesanan->id,
            'jadwal_id' => $pemesanan->jadwal_id,
            'asal' => $pemesanan->asal,
            'status_pemesanan' => 'Terkonfirmasi'
        ]);

        // Hapus dari pemesanan tiket
        $pemesanan->delete();

        // Menampilkan pesan sukses
        return redirect()->route('admin.pemesanan')->with('success', 'Pemesanan dikonfirmasi');
    }

    // // Menangani pembatalan pemesanan
    // public function cancel($id)
    // {
    //     $pemesanan = Pemesanan::findOrFail($id);
    //     $pemesanan->status_pemesanan = 'Dibatalkan';
    //     $pemesanan->save();

    //     // Pindahkan ke riwayat
    //     RiwayatPemesanan::create([
    //         'pemesanan_id' => $pemesanan->id,
    //         'status_pemesanan' => 'Dibatalkan'
    //     ]);

    //     // Hapus dari pemesanan tiket
    //     $pemesanan->delete();

    //     return redirect()->route('pemesanan.index')->with('success', 'Pemesanan dibatalkan');
    // }
}
