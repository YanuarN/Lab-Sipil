<?php

namespace App\Filament\Resources\BookingEksternalResource\Pages;

use App\Filament\Resources\BookingEksternalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookingEksternal extends EditRecord
{
    protected static string $resource = BookingEksternalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        // Update total biaya setelah data diubah
        $this->record->updateTotalBiaya();
    }
}
