<?php

namespace App\Filament\Admin\Resources\OngkirLokasiResource\Pages;

use App\Filament\Admin\Resources\OngkirLokasiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOngkirLokasi extends EditRecord
{
    protected static string $resource = OngkirLokasiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
