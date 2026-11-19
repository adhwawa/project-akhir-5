<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $fillable = [
        'pesanan_id',
        'metode_pembayaran',
        'jumlah_transfer',
        'status',
        'catatan_admin',
        'tanggal_konfirmasi',
    ];

    protected $casts = [
        'jumlah_transfer' => 'decimal:2',
        'tanggal_konfirmasi' => 'datetime',
    ];

    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }
}
