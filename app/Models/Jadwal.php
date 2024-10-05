<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = ['id'];


    // Menghubungkan dengan tabel kendaraan
    public function Kendaraan()
    {
        return $this->belongsTo(Kendaraan::class);
    }

    // Menghubungkan dengan tabel supir
    public function Supir()
    {
        return $this->belongsTo(Supir::class);
    }
}
