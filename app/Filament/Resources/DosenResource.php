<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DosenResource\Pages;
use App\Filament\Resources\DosenResource\RelationManagers;
use App\Models\Dosen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class DosenResource extends Resource
{
    protected static ?string $model = Dosen::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')->required(),
                Select::make('keahlian')
                    ->relationship('lab', 'nama_lab')
                    ->label('Keahlian (Lab)')
                    ->required()
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->label('ID')
                ->sortable()
                ->searchable(),
                TextColumn::make('nama')->label('Nama')
                ->sortable()
                ->searchable(),
                TextColumn::make('lab.nama_lab')->label('Keahlian (Lab)')
                ->sortable()
                ->searchable()
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
            'index' => Pages\ListDosens::route('/'),
            'create' => Pages\CreateDosen::route('/create'),
            'edit' => Pages\EditDosen::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('lab');
    }

    public static function getNavigationLabel(): string
    {
        return 'Dosen';
    }

    public static function getPluralModelLabel(): string
    {
        return 'Dosen';
    }

}
