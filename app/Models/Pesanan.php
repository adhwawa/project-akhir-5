<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pesanan extends Model
{
    protected $table = 'pesanans';

    protected $fillable = [
        'kode_pesanan',
        'user_id',
        'nama_pelanggan',
        'nomor_meja',
        'detail_menu',
        'subtotal',
        'total_harga',
        'status_pesanan',
    ];

    protected $casts = [
        'detail_menu' => 'array',
        'subtotal' => 'decimal:2',
        'total_harga' => 'decimal:2',
    ];

    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }
}