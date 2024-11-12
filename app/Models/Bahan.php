<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    protected $fillable = ['id' , 'nama_bahan'];
    public $timestamps = true;

    // Relasi ke tabel Resep
    public function resep()
    {
        return $this->hasMany(Resep::class);
    }
}
