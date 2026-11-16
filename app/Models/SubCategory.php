<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    protected $fillable = ['kategori_utama', 'nama_sub_kategori', 'slug', 'status'];

    public function menus(): HasMany
    {
        return $this->hasMany(Menu::class);
    }
}