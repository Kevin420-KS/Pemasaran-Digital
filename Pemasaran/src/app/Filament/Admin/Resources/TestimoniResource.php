<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TestimoniResource\Pages;
use App\Models\Testimoni;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Resource ini digunakan untuk mengelola entitas Testimoni di admin panel Filament
class TestimoniResource extends Resource
{
    // Menentukan model yang digunakan oleh resource ini
    protected static ?string $model = Testimoni::class;

    // Ikon dan label navigasi untuk sidebar di admin
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Testimoni';

    // Label untuk tampilan satuan dan jamak
    public static function getModelLabel(): string
    {
        return 'Testimoni';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Testimoni';
    }

    // Formulir untuk membuat dan mengedit data testimoni
    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('rating')
                ->numeric()
                ->minValue(1)
                ->maxValue(10)
                ->required()
                ->label('Rating (1–10 saja, tanpa /10)'),

            Forms\Components\TextInput::make('nama_produk')
                ->required()
                ->label('Nama Produk'),

            Forms\Components\TextInput::make('nama_kota')
                ->required()
                ->label('Nama Kota'),

            Forms\Components\Textarea::make('komentar')
                ->required()
                ->label('Komentar'),
        ]);
    }

    // Menampilkan kolom-kolom di tabel admin
    public static function table(Table $table): Table
    {
        return $table->columns([
                Tables\Columns\TextColumn::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(fn ($state) => "{$state}/10")
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_produk')
                    ->label('Nama Produk')
                    ->searchable(),

                Tables\Columns\TextColumn::make('nama_kota')
                    ->label('Nama Kota')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('komentar')
                    ->label('Komentar')
                    ->limit(50),
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

    // Relasi tambahan (tidak ada untuk testimoni saat ini)
    public static function getRelations(): array
    {
        return [];
    }

    // Halaman yang tersedia untuk resource ini
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTestimoni::route('/'),
            'create' => Pages\CreateTestimoni::route('/create'),
            'edit' => Pages\EditTestimoni::route('/{record}/edit'),
        ];
    }
}
