<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration untuk membuat tabel ongkir_lokasis
return new class extends Migration {
    public function up(): void
    {
        Schema::create('ongkir_lokasis', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_kota'); // Nama kota tujuan
            $table->string('provinsi'); // Nama provinsi
            $table->integer('ongkir'); // Biaya ongkir (dalam angka)
            $table->timestamps(); // Optional: bisa diabaikan jika tidak pakai
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ongkir_lokasis'); // Rollback tabel saat dihapus
    }
};
