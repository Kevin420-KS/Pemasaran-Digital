<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PenjualanResource\Pages;
use App\Models\Penjualan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PenjualanResource extends Resource
{
    protected static ?string $model = Penjualan::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationLabel = 'Penjualan';

    public static function getModelLabel(): string
    {
        return 'Penjualan';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Penjualan';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_produk')->required(),
                Forms\Components\TextInput::make('harga')->numeric()->required(),
                Forms\Components\TextInput::make('nama_channel')->required(),
                Forms\Components\TextInput::make('jenis_promosi')->required(),
                Forms\Components\TextInput::make('harga_setelah_promosi')->numeric()->required(),
                Forms\Components\TextInput::make('nama_kota')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')->label('Produk'),
                Tables\Columns\TextColumn::make('harga')->money('IDR', true)->label('Harga Awal'),
                Tables\Columns\TextColumn::make('nama_channel')->label('Channel'),
                Tables\Columns\TextColumn::make('jenis_promosi')->label('Jenis Promosi'),
                Tables\Columns\TextColumn::make('harga_setelah_promosi')->money('IDR', true)->label('Harga Promo'),
                Tables\Columns\TextColumn::make('nama_kota')->label('Kota'),
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

    public static function getRelations(): array
    {
        return [];
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
