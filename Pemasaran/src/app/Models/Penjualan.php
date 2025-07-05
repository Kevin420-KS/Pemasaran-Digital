<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model ini merepresentasikan tabel 'penjualans' dan menyimpan informasi penjualan produk
class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_produk',
        'harga',
        'nama_channel',
        'jenis_promosi',
        'harga_setelah_promosi',
        'nama_kota'
    ];

    // Casting nilai angka ke integer
    protected $casts = [
        'harga' => 'integer',
        'harga_setelah_promosi' => 'integer',
    ];
}
