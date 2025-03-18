<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KepalaLabResource\Pages;
use App\Filament\Resources\KepalaLabResource\RelationManagers;
use App\Models\KepalaLab;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Tables\Columns\TextColumn;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KepalaLabResource extends Resource
{
    protected static ?string $model = KepalaLab::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn ::make('id')->label('ID')
                ->sortable()
                ->searchable(),
                TextColumn ::make('nama')->label('Nama')
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
            'index' => Pages\ListKepalaLabs::route('/'),
            'create' => Pages\CreateKepalaLab::route('/create'),
            'edit' => Pages\EditKepalaLab::route('/{record}/edit'),
        ];
    }
}
