<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimoni;

class TestimoniSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Jakarta
            ['rating' => 8.5, 'nama_produk' => 'Nasi Goreng Spesial', 'nama_kota' => 'Jakarta', 'komentar' => 'Porsinya banyak dan rasanya mantap!'],
            ['rating' => 7.0, 'nama_produk' => 'Mie Ayam Komplit', 'nama_kota' => 'Jakarta', 'komentar' => 'Cukup enak, hanya saja kuahnya kurang hangat.'],
            ['rating' => 9.0, 'nama_produk' => 'Ayam Bakar Madu', 'nama_kota' => 'Jakarta', 'komentar' => 'Ayamnya empuk dan bumbunya meresap!'],
            ['rating' => 4.2, 'nama_produk' => 'Sate Ayam Madura', 'nama_kota' => 'Jakarta', 'komentar' => 'Kurang matang dan daging alot.'],
            ['rating' => 8.2, 'nama_produk' => 'Bakso Urat Pedas', 'nama_kota' => 'Jakarta', 'komentar' => 'Pedasnya mantap dan dagingnya berasa.'],
            ['rating' => 6.5, 'nama_produk' => 'Mie Goreng Jawa', 'nama_kota' => 'Jakarta', 'komentar' => 'Sedikit berminyak tapi enak.'],
            ['rating' => 9.2, 'nama_produk' => 'Ayam Penyet Sambal Ijo', 'nama_kota' => 'Jakarta', 'komentar' => 'Sambalnya enak banget, ayamnya empuk.'],
            ['rating' => 5.0, 'nama_produk' => 'Soto Betawi', 'nama_kota' => 'Jakarta', 'komentar' => 'Cukup enak tapi kurang daging.'],
            ['rating' => 8.8, 'nama_produk' => 'Gado-Gado Komplit', 'nama_kota' => 'Jakarta', 'komentar' => 'Sambal kacangnya enak dan segar.'],
            ['rating' => 9.5, 'nama_produk' => 'Paket Ayam Geprek + Teh', 'nama_kota' => 'Jakarta', 'komentar' => 'Worth it dengan harga segitu.'],
            ['rating' => 7.3, 'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk', 'nama_kota' => 'Jakarta', 'komentar' => 'Cocok untuk makan siang cepat.'],
            ['rating' => 6.8, 'nama_produk' => 'Lontong Sayur Medan', 'nama_kota' => 'Jakarta', 'komentar' => 'Sayurnya gurih dan lontongnya empuk.'],
            ['rating' => 7.9, 'nama_produk' => 'Tahu Gejrot Pedas', 'nama_kota' => 'Jakarta', 'komentar' => 'Asam manis pedasnya pas.'],

            // Bogor
            ['rating' => 6.5, 'nama_produk' => 'Nasi Goreng Spesial', 'nama_kota' => 'Bogor', 'komentar' => 'Kurang bumbu, tapi porsinya pas.'],
            ['rating' => 4.5, 'nama_produk' => 'Mie Ayam Komplit', 'nama_kota' => 'Bogor', 'komentar' => 'Terlalu asin dan kuahnya hambar.'],
            ['rating' => 8.8, 'nama_produk' => 'Ayam Bakar Madu', 'nama_kota' => 'Bogor', 'komentar' => 'Manis gurih dan dagingnya empuk.'],
            ['rating' => 7.0, 'nama_produk' => 'Sate Ayam Madura', 'nama_kota' => 'Bogor', 'komentar' => 'Daging lembut tapi kurang hangat.'],
            ['rating' => 6.8, 'nama_produk' => 'Bakso Urat Pedas', 'nama_kota' => 'Bogor', 'komentar' => 'Enak tapi kurang uratnya.'],
            ['rating' => 7.5, 'nama_produk' => 'Mie Goreng Jawa', 'nama_kota' => 'Bogor', 'komentar' => 'Bumbunya mantap tapi berminyak.'],
            ['rating' => 8.0, 'nama_produk' => 'Ayam Penyet Sambal Ijo', 'nama_kota' => 'Bogor', 'komentar' => 'Porsi banyak dan sambal pas.'],
            ['rating' => 3.5, 'nama_produk' => 'Soto Betawi', 'nama_kota' => 'Bogor', 'komentar' => 'Kurang berasa, lebih mirip sop.'],
            ['rating' => 7.2, 'nama_produk' => 'Gado-Gado Komplit', 'nama_kota' => 'Bogor', 'komentar' => 'Segar, cocok untuk vegetarian.'],
            ['rating' => 8.0, 'nama_produk' => 'Paket Ayam Geprek + Teh', 'nama_kota' => 'Bogor', 'komentar' => 'Sambalnya nampol!'],
            ['rating' => 4.0, 'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk', 'nama_kota' => 'Bogor', 'komentar' => 'Lelenya kecil dan amis.'],
            ['rating' => 6.0, 'nama_produk' => 'Lontong Sayur Medan', 'nama_kota' => 'Bogor', 'komentar' => 'Sayurannya kurang gurih.'],
            ['rating' => 5.5, 'nama_produk' => 'Tahu Gejrot Pedas', 'nama_kota' => 'Bogor', 'komentar' => 'Terlalu asam buat saya.'],

            // Depok
            ['rating' => 7.5, 'nama_produk' => 'Nasi Goreng Spesial', 'nama_kota' => 'Depok', 'komentar' => 'Cukup pedas dan wangi.'],
            ['rating' => 6.2, 'nama_produk' => 'Mie Ayam Komplit', 'nama_kota' => 'Depok', 'komentar' => 'Biasa saja, tidak terlalu spesial.'],
            ['rating' => 8.5, 'nama_produk' => 'Ayam Bakar Madu', 'nama_kota' => 'Depok', 'komentar' => 'Lezat dan manisnya pas.'],
            ['rating' => 4.0, 'nama_produk' => 'Sate Ayam Madura', 'nama_kota' => 'Depok', 'komentar' => 'Agak keras dan terlalu asin.'],
            ['rating' => 6.9, 'nama_produk' => 'Bakso Urat Pedas', 'nama_kota' => 'Depok', 'komentar' => 'Lumayan untuk harga segitu.'],
            ['rating' => 7.0, 'nama_produk' => 'Mie Goreng Jawa', 'nama_kota' => 'Depok', 'komentar' => 'Enak, porsi cukup.'],
            ['rating' => 8.5, 'nama_produk' => 'Ayam Penyet Sambal Ijo', 'nama_kota' => 'Depok', 'komentar' => 'Sambalnya pedasnya nampol.'],
            ['rating' => 3.9, 'nama_produk' => 'Soto Betawi', 'nama_kota' => 'Depok', 'komentar' => 'Kurang gurih dan sedikit daging.'],
            ['rating' => 7.9, 'nama_produk' => 'Gado-Gado Komplit', 'nama_kota' => 'Depok', 'komentar' => 'Segar dan sausnya melimpah.'],
            ['rating' => 8.6, 'nama_produk' => 'Paket Ayam Geprek + Teh', 'nama_kota' => 'Depok', 'komentar' => 'Tehnya manis pas, ayamnya renyah.'],
            ['rating' => 6.3, 'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk', 'nama_kota' => 'Depok', 'komentar' => 'Lumayan tapi sambal kurang.'],
            ['rating' => 7.1, 'nama_produk' => 'Lontong Sayur Medan', 'nama_kota' => 'Depok', 'komentar' => 'Pas untuk sarapan.'],
            ['rating' => 5.0, 'nama_produk' => 'Tahu Gejrot Pedas', 'nama_kota' => 'Depok', 'komentar' => 'Pedasnya nanggung.'],

            // Bekasi
            ['rating' => 8.0, 'nama_produk' => 'Nasi Goreng Spesial', 'nama_kota' => 'Bekasi', 'komentar' => 'Rasa khas dan porsi besar.'],
            ['rating' => 3.0, 'nama_produk' => 'Mie Ayam Komplit', 'nama_kota' => 'Bekasi', 'komentar' => 'Kurang rasa, terlalu banyak minyak.'],
            ['rating' => 8.9, 'nama_produk' => 'Ayam Bakar Madu', 'nama_kota' => 'Bekasi', 'komentar' => 'Enak banget dan juicy.'],
            ['rating' => 6.0, 'nama_produk' => 'Sate Ayam Madura', 'nama_kota' => 'Bekasi', 'komentar' => 'Lumayan untuk lauk malam.'],
            ['rating' => 7.5, 'nama_produk' => 'Bakso Urat Pedas', 'nama_kota' => 'Bekasi', 'komentar' => 'Pedasnya mantap.'],
            ['rating' => 5.0, 'nama_produk' => 'Mie Goreng Jawa', 'nama_kota' => 'Bekasi', 'komentar' => 'Kurang bumbu dan sedikit berminyak.'],
            ['rating' => 9.0, 'nama_produk' => 'Ayam Penyet Sambal Ijo', 'nama_kota' => 'Bekasi', 'komentar' => 'Top banget buat makan siang.'],
            ['rating' => 6.8, 'nama_produk' => 'Soto Betawi', 'nama_kota' => 'Bekasi', 'komentar' => 'Gurih dan hangat.'],
            ['rating' => 7.5, 'nama_produk' => 'Gado-Gado Komplit', 'nama_kota' => 'Bekasi', 'komentar' => 'Segar dan saus kacangnya pas.'],
            ['rating' => 9.1, 'nama_produk' => 'Paket Ayam Geprek + Teh', 'nama_kota' => 'Bekasi', 'komentar' => 'Mantap sambalnya, teh manis.'],
            ['rating' => 6.4, 'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk', 'nama_kota' => 'Bekasi', 'komentar' => 'Porsi cukup tapi lele kecil.'],
            ['rating' => 7.3, 'nama_produk' => 'Lontong Sayur Medan', 'nama_kota' => 'Bekasi', 'komentar' => 'Cocok buat buka puasa.'],
            ['rating' => 6.0, 'nama_produk' => 'Tahu Gejrot Pedas', 'nama_kota' => 'Bekasi', 'komentar' => 'Enak tapi kurang pedas.'],

            // Tangerang
            ['rating' => 6.8, 'nama_produk' => 'Nasi Goreng Spesial', 'nama_kota' => 'Tangerang', 'komentar' => 'Lumayan, cocok buat malam hari.'],
            ['rating' => 5.5, 'nama_produk' => 'Mie Ayam Komplit', 'nama_kota' => 'Tangerang', 'komentar' => 'Agak hambar tapi porsi banyak.'],
            ['rating' => 8.7, 'nama_produk' => 'Ayam Bakar Madu', 'nama_kota' => 'Tangerang', 'komentar' => 'Dagingnya empuk dan manis.'],
            ['rating' => 4.5, 'nama_produk' => 'Sate Ayam Madura', 'nama_kota' => 'Tangerang', 'komentar' => 'Agak keras dan sedikit hangus.'],
            ['rating' => 7.3, 'nama_produk' => 'Bakso Urat Pedas', 'nama_kota' => 'Tangerang', 'komentar' => 'Pedas gurih, cocok untuk malam.'],
            ['rating' => 6.2, 'nama_produk' => 'Mie Goreng Jawa', 'nama_kota' => 'Tangerang', 'komentar' => 'Kurang rasa sedikit, tapi oke.'],
            ['rating' => 8.3, 'nama_produk' => 'Ayam Penyet Sambal Ijo', 'nama_kota' => 'Tangerang', 'komentar' => 'Sambalnya mantap dan porsi banyak.'],
            ['rating' => 4.8, 'nama_produk' => 'Soto Betawi', 'nama_kota' => 'Tangerang', 'komentar' => 'Daging sedikit, kuah enak.'],
            ['rating' => 7.1, 'nama_produk' => 'Gado-Gado Komplit', 'nama_kota' => 'Tangerang', 'komentar' => 'Segar dan lengkap isinya.'],
            ['rating' => 9.0, 'nama_produk' => 'Paket Ayam Geprek + Teh', 'nama_kota' => 'Tangerang', 'komentar' => 'Ayam renyah dan teh dingin.'],
            ['rating' => 5.9, 'nama_produk' => 'Paket Nasi + Lele Goreng + Es Jeruk', 'nama_kota' => 'Tangerang', 'komentar' => 'Jeruknya asam tapi segar.'],
            ['rating' => 7.0, 'nama_produk' => 'Lontong Sayur Medan', 'nama_kota' => 'Tangerang', 'komentar' => 'Sayur pas gurihnya.'],
            ['rating' => 5.3, 'nama_produk' => 'Tahu Gejrot Pedas', 'nama_kota' => 'Tangerang', 'komentar' => 'Kurang meledak rasanya.'],
        ];

        foreach ($data as $item) {
            Testimoni::create($item);
        }
    }
}
