<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pesanan')->unique();

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nama_pelanggan');
            $table->string('nomor_meja')->nullable();
            $table->json('detail_menu');
            $table->decimal('subtotal', 12, 2);
            $table->decimal('total_harga', 12, 2);

            $table->enum('status_pesanan', [
                'menunggu_pembayaran',
                'diproses',
                'selesai',
                'dibatalkan'
            ])->default('menunggu_pembayaran');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }

    
};
