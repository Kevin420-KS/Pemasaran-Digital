<?php

// Resource Produk untuk panel admin Filament, menangani input & tampilan data produk

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProdukResource\Pages;
use App\Models\Produk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ProdukResource extends Resource
{
    // Menghubungkan resource ini ke model Produk
    protected static ?string $model = Produk::class;

    // Ikon dan label navigasi di sidebar admin
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    protected static ?string $navigationLabel = 'Produk';

    public static function getModelLabel(): string
    {
        return 'Produk';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Produk';
    }

    // Menentukan form input untuk tambah/edit produk
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk')->required(),
                Forms\Components\Select::make('kategori')->required()->options([
                    'Makanan Berat' => 'Makanan Berat',
                    'Minuman' => 'Minuman',
                    'Camilan' => 'Camilan',
                ]),
                Forms\Components\TextInput::make('harga')->numeric()->required(),
            ]);
    }

    // Menampilkan tabel data produk di halaman utama resource
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('harga')->money('IDR', true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // Belum memiliki relasi ke resource lain
    public static function getRelations(): array
    {
        return [];
    }

    // Routing halaman CRUD dalam resource Produk
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProduk::route('/'),
            'create' => Pages\CreateProduk::route('/create'),
            'edit' => Pages\EditProduk::route('/{record}/edit'),
        ];
    }
}
