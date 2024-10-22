<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPemesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = ['id'];

    // Menghubungkan dengan tabel pemesanan
    public function Pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'pemesanan_id');
    }
}
