<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Channel;

// Seeder ini mengisi tabel channels dengan data awal
class ChannelSeeder extends Seeder
{
    public function run(): void
    {
        // Contoh data channel dengan jenis promosi yang berbeda-beda
        Channel::create([
            'nama_channel' => 'Instagram',
            'jenis_promosi' => 'Diskon 10%'
        ]);

        Channel::create([
            'nama_channel' => 'ShopeeFood',
            'jenis_promosi' => 'Gratis Ongkir'
        ]);

        Channel::create([
            'nama_channel' => 'TikTok',
            'jenis_promosi' => 'Cashback 20%'
        ]);

        Channel::create([
            'nama_channel' => 'Email Marketing',
            'jenis_promosi' => 'Diskon Member (20%)'
        ]);

        Channel::create([
            'nama_channel' => 'Website Promo',
            'jenis_promosi' => 'Bundle Paket Hemat (15%)'
        ]);
    }
}
