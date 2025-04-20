<?php

namespace App\Filament\Resources\BookingEksternalResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class DetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'details';
    
    public function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\Select::make('jenis_tes')
                ->label('Jenis Tes')
                ->relationship('jenisTest', 'order') // Sesuaikan dengan kolom yang ingin ditampilkan
                ->required()
                ->searchable()
                ->preload(),
            Forms\Components\TextInput::make('jumlah_pengetesan')
                ->numeric()
                ->required()
                ->minValue(1),
            // Hapus input subtotal karena akan dihitung otomatis
        ]);
    }
    
    public function table(Table $table): Table
    {
        return $table
        ->recordTitleAttribute('id')
        ->columns([
            Tables\Columns\TextColumn::make('jenis_tes')
                ->formatStateUsing(function ($state) {
                    // Jika perlu, ambil nama jenis tes dari tabel referensi
                    $jenisTes = \App\Models\DaftarHarga::find($state)?->nama_tes ?? 'Jenis Tes #' . $state;
                    return $jenisTes;
                })
                ->sortable(),
            Tables\Columns\TextColumn::make('jumlah_pengetesan')
                ->label('Jumlah Tes')
                ->numeric()
                ->sortable(),
            Tables\Columns\TextColumn::make('subtotal')
                ->money('IDR'),
        ])
            ->filters([
                // Filter sesuai kebutuhan
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
