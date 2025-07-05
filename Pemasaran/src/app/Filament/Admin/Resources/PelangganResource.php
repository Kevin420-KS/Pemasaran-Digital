<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PelangganResource\Pages;
use App\Models\Pelanggan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Resource ini mengatur tampilan form dan tabel data pelanggan di panel admin
class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class; // Hubungkan ke model Pelanggan

    protected static ?string $navigationIcon = 'heroicon-o-user-group'; // Ikon pada sidebar
    protected static ?string $navigationLabel = 'Pelanggan'; // Label menu di navigasi

    public static function getModelLabel(): string
    {
        return 'Pelanggan'; // Label tunggal untuk entitas
    }

    public static function getPluralModelLabel(): string
    {
        return 'Pelanggan'; // Label jamak untuk entitas
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Form input untuk nama, kategori, gender, umur, dan email
                Forms\Components\TextInput::make('nama_pelanggan')->required(),
                Forms\Components\Select::make('kategori')->options([
                    'Siswa' => 'Siswa',
                    'Mahasiswa' => 'Mahasiswa',
                    'Orang Tua' => 'Orang Tua',
                    'Artis' => 'Artis',
                ])->required(),
                Forms\Components\Select::make('gender')->options([
                    'Laki-laki' => 'Laki-laki',
                    'Perempuan' => 'Perempuan',
                ])->required(),
                Forms\Components\TextInput::make('umur')->numeric()->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom-kolom yang akan ditampilkan di tabel admin
                Tables\Columns\TextColumn::make('nama_pelanggan'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('umur'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(), // Aksi edit data pelanggan
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(), // Aksi hapus massal
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return []; // Tidak memiliki relasi dengan model lain saat ini
    }

    public static function getPages(): array
    {
        return [
            // Routing ke halaman list, create, dan edit data pelanggan
            'index' => Pages\ListPelanggan::route('/'),
            'create' => Pages\CreatePelanggan::route('/create'),
            'edit' => Pages\EditPelanggan::route('/{record}/edit'),
        ];
    }
}
