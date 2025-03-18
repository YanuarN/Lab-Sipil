<?php

namespace App\Filament\Resources\KepalaLabResource\Pages;

use App\Filament\Resources\KepalaLabResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKepalaLabs extends ListRecords
{
    protected static string $resource = KepalaLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
