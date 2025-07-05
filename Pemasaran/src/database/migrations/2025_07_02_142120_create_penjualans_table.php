<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration ini membuat tabel 'penjualans' untuk menyimpan data transaksi penjualan
return new class extends Migration {
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama_produk'); // Nama produk makanan
            $table->integer('harga'); // Harga sebelum promo
            $table->string('nama_channel'); // Nama channel promosi
            $table->string('jenis_promosi'); // Jenis promo yang digunakan
            $table->integer('harga_setelah_promosi'); // Harga setelah promo diterapkan
            $table->string('nama_kota'); // Lokasi pemesan
            $table->timestamps(); // created_at dan updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
