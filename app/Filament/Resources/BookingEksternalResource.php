<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingEksternalResource\Pages;
use App\Filament\Resources\BookingEksternalResource\RelationManagers;
use App\Models\BookingEksternal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;

class BookingEksternalResource extends Resource
{
    protected static ?string $model = BookingEksternal::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationLabel = 'BookingEksternal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_instansi')
                    ->required(),
                Forms\Components\TextInput::make('nama_proyek')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_tes'),
                Forms\Components\DatePicker::make('tanggal_pembuatan'),
                Forms\Components\Repeater::make('details')
                ->relationship() // Pastikan relasi ke 'details'
                ->schema([
                    Forms\Components\Select::make('jenis_tes')
                        ->label('Jenis Tes')
                        ->relationship('jenisTest', 'order') // Ganti ke relasi yang benar
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set, $get) {
                            $harga = \App\Models\DaftarHarga::find($state)?->harga ?? 0;
                            $set('sub_total', $harga * $get('jumlah_pengetesan'));
                        }),
                    Forms\Components\TextInput::make('jumlah_pengetesan')
                        ->numeric()
                        ->required()
                        ->reactive()
                        ->afterStateUpdated(function ($state, callable $set, $get) {
                            $harga = \App\Models\DaftarHarga::find($get('jenis_tes'))?->harga ?? 0;
                            $set('sub_total', $harga * $state);
                        }),
                    Forms\Components\TextInput::make('sub_total')
                        ->disabled()
                        ->numeric()
                        ->prefix('Rp'),
                ])
                ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_instansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_proyek')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_tes')
                    ->date(),
                Tables\Columns\TextColumn::make('tanggal_pembuatan')
                    ->date(),
                Tables\Columns\TextColumn::make('total_biaya')
                    ->money('IDR'),
                // Kolom untuk menampilkan detail jenis tes dan jumlah tes
                Tables\Columns\TextColumn::make('details')
                    ->label('Jenis dan Jumlah Tes')
                    ->view('filament.tables.columns.jenis-dan-jumlah-tes'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('cetakSurat')
                    ->label('Cetak')
                    ->icon('heroicon-o-printer')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->action(function (BookingEksternal $record) {
                        Notification::make()
                            ->title('Berhasil membuka nota')
                            ->success()
                            ->send();
                    })
                    ->url(fn(BookingEksternal $record) => route('nota.eksternal', ['id' => $record->id]))
                    ->openUrlInNewTab()
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
            // RelationManagers\DetailsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBookingEksternals::route('/'),
            'create' => Pages\CreateBookingEksternal::route('/create'),
            'edit' => Pages\EditBookingEksternal::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Booking Eksternal';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'success';
    }
    public static function getPluralModelLabel(): string
    {
        return 'Booking Eksternal';
    }
}
