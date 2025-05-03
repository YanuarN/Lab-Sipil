<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarHargaResource\Pages;
use App\Filament\Resources\DaftarHargaResource\RelationManagers;
use App\Models\DaftarHarga;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class DaftarHargaResource extends Resource
{
    protected static ?string $model = DaftarHarga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('order')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Pengujian'),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->maxLength(255)
                    ->label('Harga'),
                Forms\Components\Textarea::make('keterangan')
                    ->required()
                    ->label('Keterangan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn ::make('id')->label('ID')
                ->sortable()
                ->searchable(),
                TextColumn ::make('order')->label('Nama')
                ->sortable()
                ->searchable(),
                TextColumn ::make('harga')->label('Harga')
                ->sortable()
                ->searchable(),
                TextColumn ::make('keterangan')->label('Keterangan')
                ->sortable()
                ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDaftarHargas::route('/'),
            'create' => Pages\CreateDaftarHarga::route('/create'),
            'edit' => Pages\EditDaftarHarga::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Daftar Harga';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Harga';
    }
}
