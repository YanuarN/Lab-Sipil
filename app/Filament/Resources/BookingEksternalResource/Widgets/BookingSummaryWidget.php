<?php

namespace App\Filament\Resources\BookingEksternalResource\Widgets;

use App\Models\BookingEksternal;
use App\Models\BookingEksDetail;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class BookingSummaryWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Bookings', BookingEksternal::count()),
            Stat::make('Total Jenis Tes', BookingEksDetail::distinct('jenis_tes')->count()),
            Stat::make('Total Pengetesan', BookingEksDetail::sum('jumlah_pengetesan')),
        ];
    }
}


