<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PelangganResource\Pages;
use App\Models\Pelanggan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PelangganResource extends Resource
{
    protected static ?string $model = Pelanggan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationLabel = 'Pelanggan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                Tables\Columns\TextColumn::make('nama_pelanggan'),
                Tables\Columns\TextColumn::make('kategori'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('umur'),
                Tables\Columns\TextColumn::make('email'),
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
            'index' => Pages\ListPelanggan::route('/'),
            'create' => Pages\CreatePelanggan::route('/create'),
            'edit' => Pages\EditPelanggan::route('/{record}/edit'),
        ];
    }
}
