<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    protected $fillable = [
        'sub_category_id',
        'kategori_utama',
        'nama_menu',
        'harga',
        'status',
        'foto',
        'deskripsi',
        'tampilkan_katalog',
    ];

    protected $casts = [
        'tampilkan_katalog' => 'boolean',
        'harga' => 'integer',
    ];

    public function subCategory(): BelongsTo
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function getHargaFormatAttribute(): string
    {
        return 'Rp ' . number_format($this->harga, 0, ',', '.');
    }
}