<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration untuk membuat tabel channels di database
return new class extends Migration {
    public function up(): void
    {
        Schema::create('channels', function (Blueprint $table) {
            $table->id();
            $table->string('nama_channel'); // Nama platform promosi (misal: Instagram)
            $table->string('jenis_promosi'); // Jenis promosi yang ditawarkan
            $table->timestamps(); // Kolom waktu dibuat/diperbarui (bisa diabaikan jika tidak dipakai)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('channels'); // Menghapus tabel saat rollback
    }
};
