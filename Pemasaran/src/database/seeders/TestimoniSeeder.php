<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        Testimoni::create([
            'rating' => '7.5/10',
            'nama_produk' => 'Ayam Geprek Keju',
            'komentar' => 'Makanannya enak dan pengiriman cepat'
        ]);

        Testimoni::create([
            'rating' => '6.5/10',
            'nama_produk' => 'Jus Alpukat',
            'komentar' => 'Ayamnya pedas tapi mantap!'
        ]);

        Testimoni::create([
            'rating' => '5.0/10',
            'nama_produk' => 'Ayam Geprek Keju',
            'komentar' => 'Minumannya kurang dingin'
        ]);

        Testimoni::create([
            'rating' => '8.0/10',
            'nama_produk' => 'Donat Coklat',
            'komentar' => 'Donatnya empuk banget, sukaa!'
        ]);

        Testimoni::create([
            'rating' => '4.5/10',
            'nama_produk' => 'Donat Coklat',
            'komentar' => 'Jusnya kurang manis'
        ]);
    }
}
