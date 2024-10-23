<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = ['id'];

    // Menghubungkan dengan tabel kendaraan
    public function Pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
