<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Migration untuk membuat tabel 'testimonis'
return new class extends Migration {
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('rating'); // Disarankan diganti ke float jika ingin validasi ketat
            $table->string('nama_produk');
            $table->string('nama_kota'); // Untuk pengelompokan rating per kota
            $table->text('komentar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
