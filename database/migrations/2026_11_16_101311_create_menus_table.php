<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->constrained('sub_categories')->cascadeOnDelete();
            $table->enum('kategori_utama', ['Makanan', 'Minuman', 'Desert']);
            $table->string('nama_menu');
            $table->unsignedBigInteger('harga');
            $table->enum('status', ['Tersedia', 'Habis'])->default('Tersedia');
            $table->string('foto')->nullable();
            $table->text('deskripsi')->nullable();
            $table->boolean('tampilkan_katalog')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};