<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Testimoni;
use Filament\Widgets\LineChartWidget;

// Widget chart untuk menampilkan rata-rata rating produk per kota
class RatingPerJenisMakananChart extends LineChartWidget
{
    // Judul yang tampil di atas chart
    protected static ?string $heading = 'Rating Setiap Jenis Makanan Berdasarkan Kota';

    // Menyiapkan data untuk chart
    protected function getData(): array
    {
        // Mengambil rata-rata rating per nama_produk dan nama_kota
        $testimonis = Testimoni::selectRaw('nama_kota, nama_produk, AVG(rating) as avg_rating')
            ->groupBy('nama_kota', 'nama_produk')
            ->get();

        // Daftar produk dan kota unik
        $produkList = $testimonis->pluck('nama_produk')->unique()->values();
        $kotaList = $testimonis->pluck('nama_kota')->unique()->values();

        // Warna kustom untuk setiap kota
        $warnaKota = [
            'Tangerang' => '#3b82f6',
            'Depok'     => '#ef4444',
            'Jakarta'   => '#10b981',
            'Bekasi'    => '#f59e0b',
            'Bogor'     => '#8b5cf6',
        ];

        $datasets = [];

        // Loop kota dan produk untuk membentuk struktur data chart
        foreach ($kotaList as $kota) {
            $dataPerProduk = [];

            foreach ($produkList as $produk) {
                $rating = $testimonis
                    ->firstWhere(fn ($item) => $item->nama_kota === $kota && $item->nama_produk === $produk);

                $dataPerProduk[] = $rating ? (float) $rating->avg_rating : null;
            }

            $datasets[] = [
                'label' => $kota,
                'data' => $dataPerProduk,
                'borderColor' => $warnaKota[$kota] ?? '#000000',
                'fill' => false,
            ];
        }

        return [
            'datasets' => $datasets,
            'labels' => $produkList->toArray(),
        ];
    }
}
