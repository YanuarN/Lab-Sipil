<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255)
                    ->label('Nama'),
                Forms\Components\TextInput::make('nim')
                    ->required()
                    ->maxLength(255)
                    ->label('NIM'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label('Email'),
                Forms\Components\TextInput::make('nomor')
                    ->required()
                    ->maxLength(255)
                    ->label('Nomor HP'),
                Forms\Components\Select::make('prodi')
                    ->required()
                    ->options([
                        'Sarjana Teknik Sipil' => 'Sarjana Teknik Sipil',
                        'Magister Teknik Sipil' => 'Magister Teknik Sipil',
                    ])
                    ->label('Program Studi'),
                Forms\Components\Select::make('pembimbing_id')
                    ->relationship('pembimbingRelation', 'nama')
                    ->required()
                    ->label('Pembimbing'),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'daftar' => 'Daftar',
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->default('pending')
                    ->label('Status')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
            TextColumn::make('id')->label('ID'),
            TextColumn::make('nama')->label('Nama')
            ->sortable()
            ->searchable(),
            TextColumn::make('nim')->label('NIM')
            ->sortable()
            ->searchable(),
            TextColumn::make('email')->label('Email')
            ->sortable()
            ->searchable(),
            TextColumn::make('nomor')->label('Nomor')
            ->sortable()
            ->searchable(),
            TextColumn::make('prodi')->label('Prodi')
            ->sortable()
            ->searchable(),
            TextColumn::make('pembimbingRelation.nama')->label('Pembimbing')
            ->sortable()
            ->searchable(),
            TextColumn::make('status')->label('Status')
            ->sortable()
            ->searchable(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('setProcessing')
                    ->label('Proses')
                    ->icon('heroicon-o-play')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->action(function (Booking $record) {
                        $record->status = 'proses';
                        $record->save();
                        
                        Notification::make()
                            ->title('Status berhasil diubah menjadi proses')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (Booking $record) => $record->status != 'proses' && $record->status != 'selesai'),
                    
                Action::make('setCompleted')
                    ->label('Selesai')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->action(function (Booking $record) {
                        $record->status = 'selesai';
                        $record->save();
                        
                        Notification::make()
                            ->title('Status berhasil diubah menjadi selesai')
                            ->success()
                            ->send();
                    })
                    ->visible(fn (Booking $record) => $record->status != 'selesai'),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->with('pembimbingRelation');
    }
    
}
