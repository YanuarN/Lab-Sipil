<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeminjamanRuangResource\Pages;
use App\Filament\Resources\PeminjamanRuangResource\RelationManagers;
use App\Models\PeminjamanRuang;
use App\Models\Ruang;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeminjamanRuangResource extends Resource
{
    protected static ?string $model = PeminjamanRuang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama')
                    ->label('Nama Peminjam')
                    ->required(),
                Select::make('ruang')
                    ->label('Ruangan')
                    ->options(Ruang::all()->pluck('nama_ruang', 'id'))
                    ->required(),
                TextInput::make('notelf')
                    ->label('Nomor HP')
                    ->required(),
                TextInput::make('tanggal')
                    ->label('Tanggal')
                    ->type('date')
                    ->required(),
                TextInput::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->type('time')
                    ->required(),
                TextInput::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->type('time')
                    ->required(),
                TextInput::make('keperluan')
                    ->label('Keperluan')
                    ->required(),
                Select::make('status')
                    ->label('Status')
                    ->options([
                        'Menunggu' => 'Menunggu',
                        'Disetujui' => 'Disetujui',
                        'Ditolak' => 'Ditolak'
                    ])
                    ->default('Menunggu')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Peminjam')
                    ->searchable(),
                TextColumn::make('lab.nama_ruang')
                    ->label('Ruangan'),
                TextColumn::make('notelf')
                    ->label('Nomor HP'),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->date('d M Y'),
                TextColumn::make('jam_mulai')
                    ->label('Jam Mulai')
                    ->time('H:i'),
                TextColumn::make('jam_selesai')
                    ->label('Jam Selesai')
                    ->time('H:i'),
                TextColumn::make('keperluan')
                    ->label('Keperluan'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Menunggu' => 'warning',
                        'Disetujui' => 'success',
                        'Ditolak' => 'danger',
                    }),
                TextColumn::make('created_at')
                    ->label('Waktu Booking')
                    ->dateTime('d M Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                ->options([
                    'Menunggu' => 'Menunggu',
                    'Disetujui' => 'Disetujui',
                    'Ditolak' => 'Ditolak',
                ])
                ->label('Status')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('approve')
                    ->label('Setujui')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->visible(fn ($record) => $record->status === 'Menunggu')
                    ->action(function ($record) {
                        $record->update(['status' => 'Disetujui']);
                    }),
                Tables\Actions\Action::make('reject')
                    ->label('Tolak')
                    ->icon('heroicon-o-x-mark')
                    ->color('danger')
                    ->visible(fn ($record) => $record->status === 'Menunggu')
                    ->action(function ($record) {
                        $record->update(['status' => 'Ditolak']);
                    }),
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
            'index' => Pages\ListPeminjamanRuangs::route('/'),
            'create' => Pages\CreatePeminjamanRuang::route('/create'),
            'edit' => Pages\EditPeminjamanRuang::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Booking Ruangan';
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'Menunggu')->count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }
}