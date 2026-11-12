<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Minuman extends Model
{
    protected $table = 'minuman';

    protected $fillable = [
        'nama_minuman',
        'kategori',
        'gambar',
        'deskripsi',
        'harga',
    ];
}