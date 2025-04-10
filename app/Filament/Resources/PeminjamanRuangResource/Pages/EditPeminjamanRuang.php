<?php

namespace App\Filament\Resources\PeminjamanRuangResource\Pages;

use App\Filament\Resources\PeminjamanRuangResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeminjamanRuang extends EditRecord
{
    protected static string $resource = PeminjamanRuangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
