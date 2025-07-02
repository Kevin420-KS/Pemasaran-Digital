<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('ongkir_lokasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kota');
            $table->string('provinsi');
            $table->integer('ongkir');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ongkir_lokasis');
    }
};
