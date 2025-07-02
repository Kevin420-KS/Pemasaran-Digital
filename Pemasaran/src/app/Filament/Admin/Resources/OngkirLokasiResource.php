<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OngkirLokasiResource\Pages;
use App\Models\OngkirLokasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OngkirLokasiResource extends Resource
{
    protected static ?string $model = OngkirLokasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Ongkir & Lokasi';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_kota')->required(),
                Forms\Components\TextInput::make('provinsi')->required(),
                Forms\Components\TextInput::make('ongkir')->numeric()->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_kota'),
                Tables\Columns\TextColumn::make('provinsi'),
                Tables\Columns\TextColumn::make('ongkir')->money('IDR'),
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
            'index' => Pages\ListOngkirLokasi::route('/'),
            'create' => Pages\CreateOngkirLokasi::route('/create'),
            'edit' => Pages\EditOngkirLokasi::route('/{record}/edit'),
        ];
    }
}
