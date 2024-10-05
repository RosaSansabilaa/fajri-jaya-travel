<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan
{
    private static $kendaraan = [
        [
            "kendaraan_id" => "1",
            "nomor_plat" => "EA1234DW",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ],
        [
            "kendaraan_id" => "2",
            "nomor_plat" => "EA1334DW",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ],
        [
            "kendaraan_id" => "3",
            "nomor_plat" => "EA1334AA",
            "tipe" => "Jetbus",
            "kapasitas" => "15",
            "keterangan" => "Contoh keterangan"
        ]
    ];

    public static function all()
    {
        return collect(self::$kendaraan);
    }
}
