<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat akun admin default
        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
        ]);

        $user->assignRole('super_admin');

        // Jalankan semua seeder lainnya
        $this->call([
            ProdukSeeder::class,
            ChannelSeeder::class,
            OngkirLokasiSeeder::class,
            PelangganSeeder::class,
            TestimoniSeeder::class,
            PenjualanSeeder::class,
        ]);
    }
}
