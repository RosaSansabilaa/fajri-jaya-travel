<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Menonaktifkan timestamps (created_at, updated_at)
    public $timestamps = false;

    // Mengatur properti apa saja yang tidak bisa diisi manual
    protected $guarded = ['id'];

    // Menghubungkan dengan tabel jadwal perjalanan
    public function Jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id');
    }

    // Menghubungkan dengan tabel riwayat pemesanan
    public function RiwayatPemesanan()
    {
        return $this->hasOne(RiwayatPemesanan::class, 'pemesanan_id');
    }
}
