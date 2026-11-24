<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    protected $table = 'pembayarans';

    protected $fillable = [
        'pesanan_id',
        'metode_pembayaran',
        'total_pembayaran',
        'jumlah_transfer',
        'status',
        'catatan_admin',
        'tanggal_konfirmasi',
        'status_pembayaran',
    ];

    protected $casts = [
        'total_pembayaran' => 'decimal:2',
        'jumlah_transfer' => 'decimal:2',
        'tanggal_konfirmasi' => 'datetime',
    ];

    public function pesanan(): BelongsTo
    {
        return $this->belongsTo(
            Pesanan::class,
            'pesanan_id',
            'id'
        );
    }
}
