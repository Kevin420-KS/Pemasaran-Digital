<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model untuk entitas Testimoni yang menyimpan penilaian dari pelanggan
class Testimoni extends Model
{
    use HasFactory;

    // Kolom-kolom yang dapat diisi secara massal
    protected $fillable = ['rating', 'nama_produk', 'nama_kota', 'komentar'];
}
