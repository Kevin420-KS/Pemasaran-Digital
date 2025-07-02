<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OngkirLokasi extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kota', 'provinsi', 'ongkir'];

    protected $casts = [
        'ongkir' => 'integer',
    ];

    public $timestamps = false;
}
