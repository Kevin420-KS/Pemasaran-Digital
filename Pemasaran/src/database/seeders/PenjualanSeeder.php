<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        // Diskon 10%
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Instagram',
            'jenis_promosi' => 'Diskon 10%',
            'harga_setelah_promosi' => 22500,
            'nama_kota' => 'Bekasi',
        ]);
        Penjualan::create([
            'nama_produk' => 'Mie Ayam Komplit',
            'harga' => 20000,
            'nama_channel' => 'Instagram',
            'jenis_promosi' => 'Diskon 10%',
            'harga_setelah_promosi' => 18000,
            'nama_kota' => 'Bogor',
        ]);
        Penjualan::create([
            'nama_produk' => 'Ayam Bakar Madu',
            'harga' => 30000,
            'nama_channel' => 'Instagram',
            'jenis_promosi' => 'Diskon 10%',
            'harga_setelah_promosi' => 27000,
            'nama_kota' => 'Tangerang',
        ]);

        // Gratis Ongkir
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'ShopeeFood',
            'jenis_promosi' => 'Gratis Ongkir',
            'harga_setelah_promosi' => 25000,
            'nama_kota' => 'Depok',
        ]);
        Penjualan::create([
            'nama_produk' => 'Sate Ayam Madura',
            'harga' => 22000,
            'nama_channel' => 'ShopeeFood',
            'jenis_promosi' => 'Gratis Ongkir',
            'harga_setelah_promosi' => 22000,
            'nama_kota' => 'Jakarta',
        ]);
        Penjualan::create([
            'nama_produk' => 'Bakso Urat Pedas',
            'harga' => 23000,
            'nama_channel' => 'ShopeeFood',
            'jenis_promosi' => 'Gratis Ongkir',
            'harga_setelah_promosi' => 23000,
            'nama_kota' => 'Bekasi',
        ]);

        // Cashback 20%
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'TikTok',
            'jenis_promosi' => 'Cashback 20%',
            'harga_setelah_promosi' => 20000,
            'nama_kota' => 'Bogor',
        ]);
        Penjualan::create([
            'nama_produk' => 'Mie Goreng Jawa',
            'harga' => 22000,
            'nama_channel' => 'TikTok',
            'jenis_promosi' => 'Cashback 20%',
            'harga_setelah_promosi' => 17600,
            'nama_kota' => 'Depok',
        ]);
        Penjualan::create([
            'nama_produk' => 'Ayam Penyet Sambal Ijo',
            'harga' => 27000,
            'nama_channel' => 'TikTok',
            'jenis_promosi' => 'Cashback 20%',
            'harga_setelah_promosi' => 21600,
            'nama_kota' => 'Jakarta',
        ]);

        // Diskon Member (20%)
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Email Marketing',
            'jenis_promosi' => 'Diskon Member (20%)',
            'harga_setelah_promosi' => 20000,
            'nama_kota' => 'Depok',
        ]);
        Penjualan::create([
            'nama_produk' => 'Soto Betawi',
            'harga' => 28000,
            'nama_channel' => 'Email Marketing',
            'jenis_promosi' => 'Diskon Member (20%)',
            'harga_setelah_promosi' => 22400,
            'nama_kota' => 'Tangerang',
        ]);
        Penjualan::create([
            'nama_produk' => 'Gado-Gado Komplit',
            'harga' => 21000,
            'nama_channel' => 'Email Marketing',
            'jenis_promosi' => 'Diskon Member (20%)',
            'harga_setelah_promosi' => 16800,
            'nama_kota' => 'Bekasi',
        ]);

        // Bundle Paket Hemat (15%)
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Website Promo',
            'jenis_promosi' => 'Bundle Paket Hemat (15%)',
            'harga_setelah_promosi' => 21250,
            'nama_kota' => 'Tangerang',
        ]);
        Penjualan::create([
            'nama_produk' => 'Paket Ayam Geprek + Teh',
            'harga' => 28000,
            'nama_channel' => 'Website Promo',
            'jenis_promosi' => 'Bundle Paket Hemat (15%)',
            'harga_setelah_promosi' => 23800,
            'nama_kota' => 'Bogor',
        ]);
        Penjualan::create([
            'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk',
            'harga' => 26000,
            'nama_channel' => 'Website Promo',
            'jenis_promosi' => 'Bundle Paket Hemat (15%)',
            'harga_setelah_promosi' => 22100,
            'nama_kota' => 'Jakarta',
        ]);
    }
}
