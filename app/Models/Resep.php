<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $fillable = ['nama', 'deskripsi', 'cara_buat', 'gambar', 'id_kategori' ,'id_bahan'];
    public $timestamps = true;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function bahan()
    {
        return $this->belongsTo(Bahan::class, 'id_bahan');
    }

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }

     //menghapus img
     public function deleteImage()
     {
         if ($this->gambar && file_exists(public_path('images/resep' . $this->gambar))) {
             return unlink(public_path('images/resep' . $this->gambar));
         }
     }
}
