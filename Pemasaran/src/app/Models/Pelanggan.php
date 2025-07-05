<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model ini mewakili tabel 'pelanggans' dalam database
class Pelanggan extends Model
{
    use HasFactory;

    // Kolom-kolom yang diizinkan untuk diisi secara massal
    protected $fillable = ['nama_pelanggan', 'kategori', 'gender', 'umur', 'email'];

    // Konversi otomatis 'umur' menjadi integer
    protected $casts = [
        'umur' => 'integer',
    ];

    public $timestamps = false; // Tidak menggunakan kolom created_at & updated_at
}
