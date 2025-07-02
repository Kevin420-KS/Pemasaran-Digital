<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Penjualan;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Instagram',
            'jenis_promosi' => 'Diskon 10%',
            'harga_setelah_promosi' => 22500,
            'nama_kota' => 'Bekasi',
            'provinsi' => 'Jawa Barat'
        ]);

        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'ShopeeFood',
            'jenis_promosi' => 'Gratis Ongkir',
            'harga_setelah_promosi' => 25000,
            'nama_kota' => 'Depok',
            'provinsi' => 'Jawa Barat'
        ]);

        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'TikTok',
            'jenis_promosi' => 'Cashback 20%',
            'harga_setelah_promosi' => 20000,
            'nama_kota' => 'Bogor',
            'provinsi' => 'Jawa Barat'
        ]);

        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Email Marketing',
            'jenis_promosi' => 'Diskon Member (20%)',
            'harga_setelah_promosi' => 20000,
            'nama_kota' => 'Depok',
            'provinsi' => 'Jawa Barat'
        ]);

        Penjualan::create([
            'nama_produk' => 'Nasi Goreng Spesial',
            'harga' => 25000,
            'nama_channel' => 'Website Promo',
            'jenis_promosi' => 'Bundle Paket Hemat (15%)',
            'harga_setelah_promosi' => 21250,
            'nama_kota' => 'Tangerang',
            'provinsi' => 'Banten'
        ]);
    }
}
