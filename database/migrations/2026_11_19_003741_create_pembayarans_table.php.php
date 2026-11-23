
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

            $table->unsignedBigInteger('total_pembayaran');

            $table->unsignedBigInteger('jumlah_transfer')->default(0);

            $table->string('bukti_pembayaran')->nullable();

            $table->enum('status', [
                'Menunggu',
                'Dikonfirmasi',
                'Ditolak'
            ])->default('Menunggu');

            $table->enum('status_pembayaran', [
                'Menunggu',
                'Dikonfirmasi',
                'Ditolak'
            ])->default('Menunggu');

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
