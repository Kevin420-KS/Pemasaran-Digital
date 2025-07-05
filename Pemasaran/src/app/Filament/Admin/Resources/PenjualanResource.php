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
                Forms\Components\TextInput::make('nama_produk')
                    ->required(),

                Forms\Components\TextInput::make('harga')
                    ->numeric()
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(fn ($state, callable $set, callable $get) => self::hitungPromo($set, $get)),

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

                Forms\Components\TextInput::make('harga_setelah_promosi')
                    ->numeric()
                    ->required()
                    ->disabled(),

                Forms\Components\TextInput::make('nama_channel')
                    ->required(),

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

    public static function hitungPromo(callable $set, callable $get): void
    {
        $harga = $get('harga');
        $promo = $get('jenis_promosi');

        if (!$harga || !$promo) {
            $set('harga_setelah_promosi', null);
            return;
        }

        $diskon = match ($promo) {
            'Diskon 10%' => 0.10,
            'Cashback 20%' => 0.20,
            'Diskon Member (20%)' => 0.20,
            'Bundle Paket Hemat (15%)' => 0.15,
            default => 0.00,
        };

        $hargaPromo = $harga - ($harga * $diskon);
        $set('harga_setelah_promosi', (int) $hargaPromo);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_produk')
                    ->label('Produk')
                    ->searchable(),

                Tables\Columns\TextColumn::make('harga')
                    ->money('IDR', true)
                    ->label('Harga Awal'),

                Tables\Columns\TextColumn::make('nama_channel')
                    ->label('Channel')
                    ->searchable(),

                Tables\Columns\TextColumn::make('jenis_promosi')
                    ->label('Jenis Promosi')
                    ->searchable(),

                Tables\Columns\TextColumn::make('harga_setelah_promosi')
                    ->money('IDR', true)
                    ->label('Harga Promo'),

                Tables\Columns\TextColumn::make('nama_kota')
                    ->label('Kota')
                    ->searchable(),
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
