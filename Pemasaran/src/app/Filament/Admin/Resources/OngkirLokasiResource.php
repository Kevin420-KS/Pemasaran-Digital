<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OngkirLokasiResource\Pages;
use App\Models\OngkirLokasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Resource ini mengelola data ongkir dan lokasi dalam panel admin
class OngkirLokasiResource extends Resource
{
    protected static ?string $model = OngkirLokasi::class; // Hubungkan ke model OngkirLokasi

    protected static ?string $navigationIcon = 'heroicon-o-map-pin'; // Ikon pada sidebar
    protected static ?string $navigationLabel = 'Ongkir & Lokasi'; // Label di navigasi

    public static function getModelLabel(): string
    {
        return 'Ongkir & Lokasi'; // Label tunggal untuk entitas
    }

    public static function getPluralModelLabel(): string
    {
        return 'Ongkir & Lokasi'; // Label jamak untuk entitas
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Form input untuk data kota, provinsi, dan ongkir
                Forms\Components\TextInput::make('nama_kota')->required(),
                Forms\Components\TextInput::make('provinsi')->required(),
                Forms\Components\TextInput::make('ongkir')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Tampilkan kolom data dari model di tabel admin
                Tables\Columns\TextColumn::make('nama_kota'),
                Tables\Columns\TextColumn::make('provinsi'),
                Tables\Columns\TextColumn::make('ongkir')->money('IDR'), // Format ongkir sebagai rupiah
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Aksi untuk edit data
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Aksi hapus massal
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return []; // Belum ada relasi dengan model lain
    }

    public static function getPages(): array
    {
        return [
            // Routing ke halaman-halaman manajemen Ongkir & Lokasi
            'index' => Pages\ListOngkirLokasi::route('/'),
            'create' => Pages\CreateOngkirLokasi::route('/create'),
            'edit' => Pages\EditOngkirLokasi::route('/{record}/edit'),
        ];
    }
}
