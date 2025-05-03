<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DaftarAlatResource\Pages;
use App\Filament\Resources\DaftarAlatResource\RelationManagers;
use App\Models\DaftarAlat;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class DaftarAlatResource extends Resource
{
    protected static ?string $model = DaftarAlat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_alat')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama Alat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn ::make('id')->label('ID')
                ->sortable()
                ->searchable(),
                TextColumn ::make('nama_alat')->label('Nama Alat')
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
            'index' => Pages\ListDaftarAlats::route('/'),
            'create' => Pages\CreateDaftarAlat::route('/create'),
            'edit' => Pages\EditDaftarAlat::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Daftar Alat';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Daftar Alat';
    }
}
