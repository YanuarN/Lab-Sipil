<?php

namespace App\Filament\Resources\PeminjamanRuangResource\Pages;

use App\Filament\Resources\PeminjamanRuangResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeminjamanRuangs extends ListRecords
{
    protected static string $resource = PeminjamanRuangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
