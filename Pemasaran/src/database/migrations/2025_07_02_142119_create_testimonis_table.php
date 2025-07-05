<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('rating'); // Bisa diganti ke float kalau perlu validasi lebih presisi
            $table->string('nama_produk');
            $table->string('nama_kota'); // Ditambahkan untuk mendukung tabel seperti gambar
            $table->text('komentar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
