<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->enum('kategori_utama', ['Makanan', 'Minuman', 'Desert']);
            $table->string('nama_sub_kategori');
            $table->string('slug')->unique();
            $table->enum('status', ['Tersedia', 'Nonaktif'])->default('Tersedia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};