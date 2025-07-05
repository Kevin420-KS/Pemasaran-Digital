<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model ini merepresentasikan tabel ongkir_lokasis di database
class OngkirLokasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kota', 'provinsi', 'ongkir']; // Kolom yang dapat diisi massal

    protected $casts = [
        'ongkir' => 'integer', // Pastikan ongkir selalu bertipe integer
    ];

    public $timestamps = false; // Tidak menggunakan created_at & updated_at
}
