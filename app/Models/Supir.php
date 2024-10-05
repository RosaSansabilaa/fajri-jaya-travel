<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $guarded = ['id'];

    public function Jadwal()
    {
        return $this->hasMany(Jadwal::class);
    }
}
