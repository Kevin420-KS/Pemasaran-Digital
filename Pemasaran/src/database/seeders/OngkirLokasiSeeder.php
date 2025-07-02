<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OngkirLokasi;

class OngkirLokasiSeeder extends Seeder
{
    public function run(): void
    {
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
