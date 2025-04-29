<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LabResource\Pages;
use App\Filament\Resources\LabResource\RelationManagers;
use App\Models\Lab;
use App\Models\KepalaLab;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class LabResource extends Resource
{
    protected static ?string $model = Lab::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_lab')->required(),
                Select::make('kepala_lab_id')
                    ->label('Kepala Lab')
                    ->options(KepalaLab::all()->pluck('nama', 'id'))
                    ->rules([
                        'unique:lab,kepala_lab_id,except,id'
                    ])
                    ->searchable()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('nama_lab')->label('Nama')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('kepalaLab.nama')
                    ->label('Kepala Lab')
                    ->placeholder('-'),
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
            'index' => Pages\ListLabs::route('/'),
            'create' => Pages\CreateLab::route('/create'),
            'edit' => Pages\EditLab::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Lab';
    }
}
