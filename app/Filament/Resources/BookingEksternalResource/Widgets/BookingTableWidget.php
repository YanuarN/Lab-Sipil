<?php

namespace App\Filament\Resources\BookingEksternalResource\Widgets;

use App\Models\BookingEksternal;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;

class BookingTableWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                BookingEksternal::query()
                    ->with('details') // Load detail tes
                    ->latest()
            )
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_instansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_proyek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_tes')
                    ->date(),
                // Tambahkan kolom untuk menampilkan detail tes
                Tables\Columns\ViewColumn::make('jenis_dan_jumlah_tes')
                    ->label('Jenis dan Jumlah Tes')
                    ->view('filament.tables.columns.jenis-dan-jumlah-tes'),
                Tables\Columns\TextColumn::make('total_biaya')
                    ->money('IDR'),
            ])
            ->actions([
                Tables\Actions\Action::make('view')
                    ->url(fn (BookingEksternal $record): string => route('filament.admin.resources.booking-eksternals.view', $record))
                    ->icon('heroicon-o-eye'),
            ])
            ->paginate(5);
    }
}