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
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
            Forms\Components\DatePicker::make('tanggal_pemesanan'),
            Forms\Components\TextInput::make('total_biaya')
                ->numeric(),
            // Tambahkan field lain sesuai kebutuhan
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
            Tables\Columns\TextColumn::make('tanggal_pemesanan')
                ->date(),
            Tables\Columns\TextColumn::make('total_biaya')
                ->money('IDR'),
            // Kolom untuk menampilkan detail jenis tes dan jumlah tes
            Tables\Columns\TextColumn::make('details')
            ->label('Jenis dan Jumlah Tes')
            ->formatStateUsing(function ($record) {
                $result = [];
                foreach ($record->details as $detail) {
                    // Jika perlu, ambil nama jenis tes dari tabel referensi
                    $jenisTes = \App\Models\DaftarHarga::find($detail->jenis_tes)?->order ?? 'Jenis Tes #' . $detail->jenis_tes;
                    $result[] = "{$jenisTes}: {$detail->jumlah_pengetesan} pengetesan";
                }
                return implode("<br>", $result);
            })
            ->html(),
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
            'index' => Pages\ListBookingEksternals::route('/'),
            'create' => Pages\CreateBookingEksternal::route('/create'),
            'edit' => Pages\EditBookingEksternal::route('/{record}/edit'),
        ];
    }
}
