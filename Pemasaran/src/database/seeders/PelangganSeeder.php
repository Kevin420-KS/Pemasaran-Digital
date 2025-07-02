<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelanggan;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        Pelanggan::create([
            'nama_pelanggan' => 'Andi Pratama',
            'kategori' => 'Mahasiswa',
            'gender' => 'Laki-laki',
            'umur' => 24,
            'email' => 'andi@email.com'
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Sinta Lestari',
            'kategori' => 'Orang Tua',
            'gender' => 'Perempuan',
            'umur' => 30,
            'email' => 'sinta@email.com'
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Budi Hartono',
            'kategori' => 'Artis',
            'gender' => 'Laki-laki',
            'umur' => 27,
            'email' => 'budi@email.com'
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Rina Anggraini',
            'kategori' => 'Siswa',
            'gender' => 'Perempuan',
            'umur' => 17,
            'email' => 'rina@email.com'
        ]);

        Pelanggan::create([
            'nama_pelanggan' => 'Dedi Wijaya',
            'kategori' => 'Orang Tua',
            'gender' => 'Laki-laki',
            'umur' => 35,
            'email' => 'dedi@email.com'
        ]);
    }
}
