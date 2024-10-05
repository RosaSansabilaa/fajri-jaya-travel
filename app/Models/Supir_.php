<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir
{
    private static $supir = [
        [
            "supir_id" => "1",
            "nama" => "Mulyono",
            "no_hp" => "081212222178",
            "alamat" => "Mataram",
            "username" => "mulyono",
            "password" => "mulyono123"
        ],
        [
            "supir_id" => "2",
            "nama" => "Mulyadi",
            "no_hp" => "081212222100",
            "alamat" => "Sumbawa",
            "username" => "mulyadi",
            "password" => "mulyadi123"
        ],
    ];   

    public static function all()
    {
        return collect(self::$supir);
    }
}
