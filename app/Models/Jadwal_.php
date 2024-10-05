<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Jadwal
{
    private static $jadwal = [
        [
            "jadwal_id" => "1",
            "tanggal_berangkat" => "2024-10-30",
            "jam_berangkat" => "08:30",
            "asal" => "Mataram",
            "tujuan" => "Sumbawa Besar",
            "kendaraan" => "EA1334DW ",
            "supir" => "Mulyono",
            "kapasitas" => "15",
            "kursi_dipesan" => "10",
            "harga" => "140.000"
        ],
        [
            "jadwal_id" => "2",
            "tanggal_berangkat" => "2024-09-21",
            "jam_berangkat" => "13:30",
            "asal" => "Taliwang",
            "tujuan" => "Mataram",
            "kendaraan" => "EA1334AA ",
            "supir" => "Mulyadi",
            "kapasitas" => "15",
            "kursi_dipesan" => "5",
            "harga" => "200.000"
        ]
    ];

    public static function all()
    {
        return self::$jadwal;
    }
}
