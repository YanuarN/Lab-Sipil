<?php

namespace App\Filament\Resources\BookingResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\DaftarAlat;

class AlatRelationManager extends RelationManager
{
    protected static string $relationship = 'alatBookings';
    
    // protected static ?string $recordTitleAttribute = 'alat_id';
    
    // public function form(Form $form): Form
    // {
    //     return $form
    //         ->schema([
    //             Forms\Components\Select::make('alat_id')
    //                 ->label('Alat')
    //                 ->options(function () {
    //                     return DaftarAlat::pluck('nama_alat', 'id')->toArray();
    //                 })
    //                 ->required()
    //                 ->searchable(),
    //         ]);
    // }

    // public function table(Table $table): Table
    // {
    //     return $table
    //         ->columns([
    //             Tables\Columns\TextColumn::make('alat.nama_alat')
    //                 ->label('Nama Alat')
    //                 ->searchable()
    //                 ->sortable(),
    //             Tables\Columns\TextColumn::make('alat.jenis')
    //                 ->label('Kategori')
    //                 ->searchable()
    //                 ->sortable()
    //                 ->toggleable(),
    //             Tables\Columns\TextColumn::make('alat.status')
    //                 ->label('Status')
    //                 ->badge()
    //                 ->color(fn (string $state): string => match ($state) {
    //                     'tersedia' => 'success',
    //                     'digunakan' => 'warning',
    //                     'rusak' => 'danger',
    //                     default => 'gray',
    //                 })
    //                 ->searchable()
    //                 ->sortable(),
    //         ])
    //         ->filters([
    //             //
    //         ])
    //         ->headerActions([
    //             Tables\Actions\CreateAction::make()->label('Tambah Alat'),
    //         ])
    //         ->actions([
    //             Tables\Actions\EditAction::make(),
    //             Tables\Actions\DeleteAction::make(),
    //         ])
    //         ->bulkActions([
    //             Tables\Actions\BulkActionGroup::make([
    //                 Tables\Actions\DeleteBulkAction::make(),
    //             ]),
    //         ]);
    // }
}