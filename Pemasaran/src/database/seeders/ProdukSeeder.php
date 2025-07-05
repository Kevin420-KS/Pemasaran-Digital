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
            'nama_produk' => 'Mie Ayam Komplit',
            'kategori' => 'Makanan Berat',
            'harga' => 20000
        ]);

        Produk::create([
            'nama_produk' => 'Ayam Bakar Madu',
            'kategori' => 'Makanan Berat',
            'harga' => 30000
        ]);

        Produk::create([
            'nama_produk' => 'Sate Ayam Madura',
            'kategori' => 'Makanan Berat',
            'harga' => 22000
        ]);

        Produk::create([
            'nama_produk' => 'Bakso Urat Pedas',
            'kategori' => 'Makanan Berat',
            'harga' => 23000
        ]);

        Produk::create([
            'nama_produk' => 'Mie Goreng Jawa',
            'kategori' => 'Makanan Berat',
            'harga' => 22000
        ]);

        Produk::create([
            'nama_produk' => 'Ayam Penyet Sambal Ijo',
            'kategori' => 'Makanan Berat',
            'harga' => 27000
        ]);

        Produk::create([
            'nama_produk' => 'Soto Betawi',
            'kategori' => 'Makanan Berat',
            'harga' => 28000
        ]);

        Produk::create([
            'nama_produk' => 'Gado-Gado Komplit',
            'kategori' => 'Makanan Berat',
            'harga' => 21000
        ]);

        Produk::create([
            'nama_produk' => 'Paket Ayam Geprek + Teh',
            'kategori' => 'Paket Hemat',
            'harga' => 28000
        ]);

        Produk::create([
            'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk',
            'kategori' => 'Paket Hemat',
            'harga' => 26000
        ]);
    }
}
