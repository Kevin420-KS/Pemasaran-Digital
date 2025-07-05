<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Model ini mewakili tabel 'channels' di database
class Channel extends Model
{
    use HasFactory;

    protected $fillable = ['nama_channel', 'jenis_promosi']; // Kolom yang boleh diisi massal

    public $timestamps = false; // Tidak menggunakan kolom created_at dan updated_at
}
