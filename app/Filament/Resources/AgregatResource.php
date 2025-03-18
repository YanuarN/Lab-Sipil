<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgregatResource\Pages;
use App\Filament\Resources\AgregatResource\RelationManagers;
use App\Models\Agregat;
use Dom\Text;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



use function Laravel\Prompts\textarea;

class AgregatResource extends Resource
{
    protected static ?string $model = Agregat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn ::make('nim')->label('NIM')
                ->sortable()
                ->searchable(),
                TextColumn ::make('judul_penelitian')->label('Judul Penelitian')
                ->sortable()
                ->searchable(),
                TextColumn ::make('instansi_tujuan')->label('Instansi Tujuan')
                ->sortable()
                ->searchable(),
                TextColumn ::make('anggota')->label('Anggota')
                ->formatStateUsing(function ($record) {
                    if (!$record->anggota) {
                        return '-';
                    }
                    $result = [];
                    foreach ($record->anggota as $anggota){
                        $result[] = $anggota['nama'] . ' (' . $anggota['nim'] . ')';
                    }
                    return implode(', ', $result);
                }),
                TextColumn::make('nama_material')
                    ->label("Nama Material")
                    ->formatStateUsing(function ($record) {
                        if (!$record->nama_material) {
                            return '-';
                        }
                        $result = [];
                        foreach ($record->nama_material as $material){
                            $result[] = $material['nama'] . ' (' . $material['jumlah'] . ')';
                        }
                        return implode(', ', $result);
                    })
    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('cetakSurat')
                    ->label('Cetak')
                    ->icon('heroicon-o-printer')
                    ->color('warning')
                    ->requiresConfirmation()
                    ->action(function (Agregat $record) {
                        Notification::make()
                            ->title('Berhasil membuka nota')
                            ->success()
                            ->send();
                            $this->refreshFormData(['status']);
                    })
                    ->url(fn (Agregat $record) => route('generate.word.document', ['id' => $record->id]))
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAgregats::route('/'),
            'create' => Pages\CreateAgregat::route('/create'),
            'edit' => Pages\EditAgregat::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return 'Permohonan Bahan';
    }
}
