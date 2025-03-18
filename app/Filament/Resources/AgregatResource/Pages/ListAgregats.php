<?php

namespace App\Filament\Resources\AgregatResource\Pages;

use App\Filament\Resources\AgregatResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAgregats extends ListRecords
{
    protected static string $resource = AgregatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
