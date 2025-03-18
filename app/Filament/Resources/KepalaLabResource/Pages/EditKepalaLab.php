<?php

namespace App\Filament\Resources\KepalaLabResource\Pages;

use App\Filament\Resources\KepalaLabResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKepalaLab extends EditRecord
{
    protected static string $resource = KepalaLabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
