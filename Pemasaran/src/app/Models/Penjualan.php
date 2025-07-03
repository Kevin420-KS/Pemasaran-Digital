<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    protected $casts = [
        'harga' => 'integer',
        'harga_setelah_promosi' => 'integer',
    ];
}
