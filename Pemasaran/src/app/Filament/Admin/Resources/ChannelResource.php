<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ChannelResource\Pages;
use App\Models\Channel;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

// Resource ini berfungsi untuk mengatur tampilan dan pengelolaan data Channel di panel admin
class ChannelResource extends Resource
{
    protected static ?string $model = Channel::class; // Menghubungkan resource ini ke model Channel

    protected static ?string $navigationIcon = 'heroicon-o-device-phone-mobile';
    protected static ?string $navigationLabel = 'Channel';

    public static function getModelLabel(): string
    {
        return 'Channel'; // Label tunggal
    }

    public static function getPluralModelLabel(): string
    {
        return 'Channel'; // Label jamak
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Form input untuk nama channel dan jenis promosinya
                Forms\Components\TextInput::make('nama_channel')->required(),
                Forms\Components\TextInput::make('jenis_promosi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan kolom nama_channel dan jenis_promosi di tabel
                Tables\Columns\TextColumn::make('nama_channel'),
                Tables\Columns\TextColumn::make('jenis_promosi'),
            ])
            ->actions([
                // Aksi edit data channel
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Aksi hapus massal untuk beberapa channel sekaligus
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return []; // Belum ada relasi antar model yang ditampilkan
    }

    public static function getPages(): array
    {
        return [
            // Mengatur routing ke halaman-halaman yang berkaitan dengan Channel
            'index' => Pages\ListChannel::route('/'),
            'create' => Pages\CreateChannel::route('/create'),
            'edit' => Pages\EditChannel::route('/{record}/edit'),
        ];
    }
}
