<?php

// Migration untuk membuat struktur tabel 'produks'

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('kategori');
            $table->integer('harga');
            $table->timestamps(); // Digunakan oleh default meskipun model tidak memakai timestamps
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
