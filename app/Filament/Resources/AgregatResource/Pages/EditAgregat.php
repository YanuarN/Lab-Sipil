<?php

namespace App\Filament\Resources\AgregatResource\Pages;

use App\Filament\Resources\AgregatResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAgregat extends EditRecord
{
    protected static string $resource = AgregatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
