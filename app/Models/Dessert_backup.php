<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dessert extends Model
{
    protected $table = 'desserts';

    protected $fillable = [
        'nama',
        'harga',
        'deskripsi',
        'gambar',
    ];
}