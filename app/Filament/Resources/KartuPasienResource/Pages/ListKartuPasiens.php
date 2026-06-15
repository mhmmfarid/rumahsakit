<?php

namespace App\Filament\Resources\KartuPasienResource\Pages;

use App\Filament\Resources\KartuPasienResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKartuPasiens extends ListRecords
{
    protected static string $resource = KartuPasienResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
