<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration ini membuat struktur tabel 'pelanggans' di database
return new class extends Migration {
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id(); // Kolom ID utama
            $table->string('nama_pelanggan'); // Nama lengkap pelanggan
            $table->string('kategori'); // Kategori pelanggan (misalnya: Mahasiswa)
            $table->string('gender'); // Jenis kelamin
            $table->integer('umur'); // Umur pelanggan
            $table->string('email')->unique(); // Email pelanggan, harus unik
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pelanggans'); // Menghapus tabel saat rollback
    }
};
