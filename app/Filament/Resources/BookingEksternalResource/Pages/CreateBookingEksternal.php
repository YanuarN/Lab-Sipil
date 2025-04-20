<?php

namespace App\Filament\Resources\BookingEksternalResource\Pages;

use App\Filament\Resources\BookingEksternalResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBookingEksternal extends CreateRecord
{
    protected static string $resource = BookingEksternalResource::class;

    protected function afterCreate(): void
    {
        // Update total biaya setelah data dibuat
        $this->record->updateTotalBiaya();
    }
}
