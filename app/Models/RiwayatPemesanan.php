<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPemesanan
{
    private static $data_pemesanan = [
        [
            "pemesanan_id" => "1",
            "tanggal_berangkat" => "2024-10-30",
            "jam_berangkat" => "08:30",
            "asal" => "Mataram",
            "tujuan" => "Sumbawa Besar",
            "nama_pemesan" => "Putri",
            "no_hp" => "085446123514",
            "email_pemesan" => "putri@gmail.com",
            "jumlah_kursi" => "2",
            "nomor_kursi" => "1, 2",
            "nama_penumpang" => "Eka, Eki",
            "tanggal_pesan" => "2024-10-28",
            "harga" => "140.000",
            "total_harga" => "280.000",
            "metode_bayar" => "Transfer Bank",
            "bukti_bayar" => "buktiBayar.jpg",
            "status_bayar" => "Menunggu Konfirmasi",
            "slug" => "detail-pemesanan-putri"
        ],
        [
            "pemesanan_id" => "2",
            "tanggal_berangkat" => "2024-10-11",
            "jam_berangkat" => "13:30",
            "asal" => "Taliwang",
            "tujuan" => "Mataram",
            "nama_pemesan" => "Putra",
            "no_hp" => "085446123514",
            "email_pemesan" => "putra@gmail.com",
            "jumlah_kursi" => "1",
            "nomor_kursi" => "4",
            "nama_penumpang" => "Putra",
            "tanggal_pesan" => "2024-10-08",
            "harga" => "200.000",
            "total_harga" => "200.000",
            "metode_bayar" => "Transfer Bank",
            "bukti_bayar" => "buktiBayar2.jpg",
            "status_bayar" => "Terkonfirmasi",
            "slug" => "detail-pemesanan-putra"
        ]
    ];

    public static function all()
    {
        return collect(self::$data_pemesanan);
    }

    //Untuk mencari data pemesanan sesuai dengan slug
    public static function find($slug)
    {
        $pemesanan = static::all();

        return $pemesanan->firstWhere('slug', $slug); //return data yang pertama kali ditemukan dimana slug=$slug
    }
}
