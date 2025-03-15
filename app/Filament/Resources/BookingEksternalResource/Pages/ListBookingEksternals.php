<?php

namespace App\Filament\Resources\BookingEksternalResource\Pages;

use App\Filament\Resources\BookingEksternalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookingEksternals extends ListRecords
{
    protected static string $resource = BookingEksternalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
