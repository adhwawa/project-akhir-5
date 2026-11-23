
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

            $table->string('bukti_pembayaran')->nullable();

            $table->enum('status_pembayaran', [
                'Menunggu',
                'Dikonfirmasi',
                'Ditolak'
            ])->default('Menunggu');

            $table->text('catatan_admin')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
