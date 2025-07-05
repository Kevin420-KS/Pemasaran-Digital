<?php

// Model Produk sebagai representasi data dalam tabel 'produks'

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi massal (fillable)
    protected $fillable = ['nama_produk', 'kategori', 'harga'];

    // Casting harga ke integer untuk menjaga format data
    protected $casts = [
        'harga' => 'integer',
    ];

    // Tidak menggunakan timestamp (created_at & updated_at)
    public $timestamps = false;
}
