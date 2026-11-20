<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
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

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }
}
