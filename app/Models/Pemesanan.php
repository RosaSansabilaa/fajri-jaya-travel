<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Menonaktifkan timestamps (created_at, updated_at)
    public $timestamps = false;

    // Mengubah nama kolom (created_at, updated_at)
    // const CREATED_AT = 'tanggal_pemesanan';
    // const UPDATED_AT = 'updated_date';

    // Mengatur properti apa saja yang tidak bisa diisi manual
    protected $guarded = ['id'];
}
