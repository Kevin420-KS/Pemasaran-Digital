<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Testimoni;
use Filament\Widgets\LineChartWidget;

class RatingPerJenisMakananChart extends LineChartWidget
{
    protected static ?string $heading = 'Rating Setiap Jenis Makanan Berdasarkan Kota';

    protected function getData(): array
    {
        $testimonis = Testimoni::selectRaw('nama_kota, nama_produk, AVG(rating) as avg_rating')
            ->groupBy('nama_kota', 'nama_produk')
            ->get();

        $produkList = $testimonis->pluck('nama_produk')->unique()->values();
        $kotaList = $testimonis->pluck('nama_kota')->unique()->values();

        // Warna manual per kota
        $warnaKota = [
            'Tangerang' => '#3b82f6', // biru
            'Depok'     => '#ef4444', // merah
            'Jakarta'   => '#10b981', // hijau
            'Bekasi'    => '#f59e0b', // kuning
            'Bogor'     => '#8b5cf6', // ungu
        ];

        $datasets = [];

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
