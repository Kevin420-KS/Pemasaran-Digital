<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenjualanResource\Pages;
use App\Models\Penjualan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Resource ini mengatur tampilan form dan tabel data penjualan di panel admin
class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class; // Menghubungkan resource ke model Penjualan

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront'; // Ikon menu di sidebar
    protected static ?string $navigationLabel = 'Penjualan'; // Label menu

    public static function getModelLabel(): string
    {
        return 'Penjualan'; // Label tunggal entitas
    }

    public static function getPluralModelLabel(): string
    {
        return 'Penjualan'; // Label jamak entitas
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input nama produk
                Forms\Components\TextInput::make('nama_produk')->required(),

                // Input harga awal produk, lalu hitung harga promo otomatis
                Forms\Components\TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set, callable $get) => self::hitungPromo($set, $get)),

                // Pilih jenis promosi, lalu hitung diskonnya otomatis
                Forms\Components\Select::make('jenis_promosi')
                    ->options([
                        'Diskon 10%' => 'Diskon 10%',
                        'Gratis Ongkir' => 'Gratis Ongkir',
                        'Cashback 20%' => 'Cashback 20%',
                        'Diskon Member (20%)' => 'Diskon Member (20%)',
                        'Bundle Paket Hemat (15%)' => 'Bundle Paket Hemat (15%)',
                    ])
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set, callable $get) => self::hitungPromo($set, $get)),

                // Field hasil perhitungan harga setelah promosi (otomatis, tidak bisa diubah manual)
                Forms\Components\TextInput::make('harga_setelah_promosi')
                    ->numeric()
                    ->required()
                    ->disabled(),

                // Nama channel promosi
                Forms\Components\TextInput::make('nama_channel')->required(),

                // Kota tujuan pembelian
                Forms\Components\Select::make('nama_kota')
                    ->options([
                        'Jakarta' => 'Jakarta',
                        'Bogor' => 'Bogor',
                        'Depok' => 'Depok',
                        'Tangerang' => 'Tangerang',
                        'Bekasi' => 'Bekasi',
                    ])
                    ->required()
                    ->label('Kota'),
            ]);
    }

    // Fungsi untuk menghitung harga promo berdasarkan jenis promosi
    public static function hitungPromo(callable $set, callable $get): void
    {
        $harga = $get('harga');
        $promo = $get('jenis_promosi');

        if (!$harga || !$promo) {
            $set('harga_setelah_promosi', null);
            return;
        }

        // Tentukan diskon berdasarkan jenis promosi
        $diskon = match ($promo) {
            'Diskon 10%' => 0.10,
            'Cashback 20%' => 0.20,
            'Diskon Member (20%)' => 0.20,
            'Bundle Paket Hemat (15%)' => 0.15,
            default => 0.00,
        };

        // Hitung harga setelah diskon
        $hargaPromo = $harga - ($harga * $diskon);
        $set('harga_setelah_promosi', (int) $hargaPromo);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom untuk ditampilkan di tabel admin
                Tables\Columns\TextColumn::make('nama_produk')->label('Produk')->searchable(),
                Tables\Columns\TextColumn::make('harga')->money('IDR', true)->label('Harga Awal'),
                Tables\Columns\TextColumn::make('nama_channel')->label('Channel')->searchable(),
                Tables\Columns\TextColumn::make('jenis_promosi')->label('Jenis Promosi')->searchable(),
                Tables\Columns\TextColumn::make('harga_setelah_promosi')->money('IDR', true)->label('Harga Promo'),
                Tables\Columns\TextColumn::make('nama_kota')->label('Kota')->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Aksi edit
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Aksi hapus massal
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return []; // Belum ada relasi ke model lain
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPenjualan::route('/'),
            'create' => Pages\CreatePenjualan::route('/create'),
            'edit' => Pages\EditPenjualan::route('/{record}/edit'),
        ];
    }
}
