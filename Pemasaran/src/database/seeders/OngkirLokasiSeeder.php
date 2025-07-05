<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OngkirLokasi;

// Seeder ini mengisi tabel ongkir_lokasis dengan data ongkir untuk beberapa kota
class OngkirLokasiSeeder extends Seeder
{
    public function run(): void
    {
        // Setiap baris mewakili satu kota dan biayanya
        OngkirLokasi::create([
            'nama_kota' => 'Jakarta',
            'provinsi' => 'DKI Jakarta',
            'ongkir' => 8000
        ]);

        OngkirLokasi::create([
            'nama_kota' => 'Bogor',
            'provinsi' => 'Jawa Barat',
            'ongkir' => 10000
        ]);

        OngkirLokasi::create([
            'nama_kota' => 'Depok',
            'provinsi' => 'Jawa Barat',
            'ongkir' => 9000
        ]);

        OngkirLokasi::create([
            'nama_kota' => 'Tangerang',
            'provinsi' => 'Banten',
            'ongkir' => 9000
        ]);

        OngkirLokasi::create([
            'nama_kota' => 'Bekasi',
            'provinsi' => 'Jawa Barat',
            'ongkir' => 10000
        ]);
    }
}
