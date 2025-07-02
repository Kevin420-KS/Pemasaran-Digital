<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->string('rating'); // Diubah dari tinyInteger jadi string
            $table->string('nama_produk'); // Ditambahkan
            $table->text('komentar');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('testimonis');
    }
};
