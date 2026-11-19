<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pesanan_id')
                ->constrained('pesanans')
                ->cascadeOnDelete();

            $table->string('metode_pembayaran')->default('QRIS');

            $table->decimal('jumlah_transfer', 12, 2);

            $table->enum('status', [
                'menunggu',
                'berhasil',
                'ditolak'
            ])->default('menunggu');

            $table->text('catatan_admin')->nullable();

            $table->timestamp('tanggal_konfirmasi')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
