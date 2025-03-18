<?php

namespace App\Filament\Resources\DaftarHargaResource\Pages;

use App\Filament\Resources\DaftarHargaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftarHargas extends ListRecords
{
    protected static string $resource = DaftarHargaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
