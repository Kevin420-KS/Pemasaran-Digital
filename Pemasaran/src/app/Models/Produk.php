<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;

    protected $fillable = ['nama_produk', 'kategori', 'harga'];

    protected $casts = [
        'harga' => 'integer',
    ];

    public $timestamps = false;
}
