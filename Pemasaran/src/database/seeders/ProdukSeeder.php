<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'kategori' => 'Makanan Berat',
            'harga' => 25000
        ]);

        Produk::create([
            'nama_produk' => 'Ayam Geprek Keju',
            'kategori' => 'Makanan Berat',
            'harga' => 27000
        ]);

        Produk::create([
            'nama_produk' => 'Es Teh Manis',
            'kategori' => 'Minuman',
            'harga' => 5000
        ]);

        Produk::create([
            'nama_produk' => 'Donat Coklat',
            'kategori' => 'Camilan',
            'harga' => 8000
        ]);

        Produk::create([
            'nama_produk' => 'Jus Alpukat',
            'kategori' => 'Minuman',
            'harga' => 12000
        ]);
    }
}
