<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use App\Models\DaftarAlat;
use App\Models\AlatBooking;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\DB;

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
                Forms\Components\TextInput::make('judul_penelitian')
                    ->required()
                    ->maxLength(255)
                    ->label('Judul Penelitian'),
                Forms\Components\Select::make('lab_id')
                    ->relationship('lab', 'nama_lab')
                    ->required()
                    ->label('Kepala Lab'),
                Forms\Components\TextInput::make('alamat_di_solo')
                    ->required()
                    ->maxLength(255)
                    ->label('Alamat di Solo'),
                Forms\Components\TextInput::make('alamat_rumah')
                    ->required()
                    ->maxLength(255)
                    ->label('Alamat Rumah'),
                Forms\Components\TextInput::make('instansi')
                    ->required()
                    ->maxLength(255)
                    ->label('Instansi'),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->required()
                    ->label('Tanggal Mulai'),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->required()
                    ->label('Tanggal Selesai'),
                Forms\Components\Select::make('kepala_id')
                    ->relationship('kepala', 'nama')
                    ->required()
                    ->label('Kepala Lab'),
                Forms\Components\Repeater::make('alatBookings')
                    ->relationship()
                    ->schema([
                        Forms\Components\Select::make('alat_id')
                            ->label('Alat')
                            ->options(function () {
                                return DaftarAlat::pluck('nama_alat', 'id')->toArray();
                            })
                            ->required()
                            ->searchable()
                            ->preload(),
                    ])
                    ->label('Pilih Alat')
                    ->defaultItems(1)
                    ->addActionLabel('Tambah Alat')
                    ->reorderableWithButtons(),
                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'daftar' => 'Daftar',
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->default('daftar')
                    ->label('Status')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
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
                TextColumn::make('judul_penelitian')->label('Judul Penelitian')
                    ->sortable()
                    ->searchable(),
                ViewColumn::make('daftar_alat')
                    ->label('Alat Dipinjam')
                    ->view('filament.tables.columns.daftar-alat'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'daftar' => 'Daftar',
                        'proses' => 'Proses',
                        'selesai' => 'Selesai',
                    ])
                    ->label('Status')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('setProcessing')
                    ->label('Proses')
                    ->icon('heroicon-o-play')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->action(function (Booking $record) {
                        Notification::make()
                            ->title('Berhasil membuka nota')
                            ->success()
                            ->send();
                        $this->refreshFormData(['status']);
                    })
                    ->url(fn(Booking $record) => route('generate.nota', ['id' => $record->id]))
                    ->openUrlInNewTab()
                    ->visible(fn(Booking $record) => $record->status != 'proses' && $record->status != 'selesai'),

                Action::make('setCompleted')
                    ->label('Selesai')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->requiresConfirmation()
                    ->url(fn(Booking $record) => route('generate.bebas.lab', ['id' => $record->id]))
                    ->openUrlInNewTab()
                    ->action(function (Booking $record) {
                        Notification::make()
                            ->title('Status berhasil diubah menjadi selesai')
                            ->success()
                            ->send();
                    })
                    ->visible(fn(Booking $record) => $record->status != 'selesai')
                    ->after(fn() => redirect(request()->header('Referer'))),
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
            // RelationManagers\AlatRelationManager::class,
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
        return parent::getEloquentQuery()->with(['pembimbingRelation', 'alatBookings.alat']);
    }

    public static function getNavigationLabel(): string
    {
        return 'Booking Mahasiswa';
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'daftar')->count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }
}
