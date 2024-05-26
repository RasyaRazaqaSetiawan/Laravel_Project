<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penulis extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_penulis' , 'jenis_kelamin'];
    public $timestamps = true;

    public function buku()
    {
        return $this->hasMany(buku::class, 'id_penulis');
    }
}
