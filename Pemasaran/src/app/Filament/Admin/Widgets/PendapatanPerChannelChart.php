<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Penjualan;
use Filament\Widgets\PieChartWidget;

class PendapatanPerChannelChart extends PieChartWidget
{
    protected static ?string $heading = 'Dampak Pendapatan Makanan dari Pemasaran Digital';

    protected function getData(): array
    {
        $data = Penjualan::selectRaw('nama_channel, SUM(harga_setelah_promosi) as total_pendapatan')
            ->groupBy('nama_channel')
            ->pluck('total_pendapatan', 'nama_channel')
            ->toArray();

        return [
            'labels' => array_keys($data),
            'datasets' => [
                [
                    'data' => array_values($data),
                    'backgroundColor' => $this->generateColors(count($data)),
                ],
            ],
        ];
    }

    protected function generateColors(int $count): array
    {
        // Contoh warna berbeda untuk tiap channel
        $palette = [
            '#3b82f6', // biru
            '#10b981', // hijau
            '#f59e0b', // oranye
            '#ef4444', // merah
            '#8b5cf6', // ungu
            '#ec4899', // pink
            '#6366f1', // indigo
            '#14b8a6', // teal
        ];

        return array_slice($palette, 0, $count);
    }
}
