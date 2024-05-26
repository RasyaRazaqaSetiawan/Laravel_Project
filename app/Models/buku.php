<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_buku', 'deskripsi', 'kategori', 'tanggal_terbit', 'id_penulis', 'cover'];

    public $timestamps = true;

    //relasi barangs2 dan pembeli
    public function penulis()
    {
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }

    // menghapus cover
    public function deleteImage()
    {
        if ($this->cover && file_exists(public_path('images/product' . $this->cover))) {
            return unlink(public_path('images/product' . $this->cover));
        }
    }
}
