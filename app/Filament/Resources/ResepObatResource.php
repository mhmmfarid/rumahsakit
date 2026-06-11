<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ResepObatResource\Pages;
use App\Models\ResepObat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ResepObatResource extends Resource
{
    protected static ?string $model = ResepObat::class;

    protected static ?string $navigationIcon  = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Pelayanan';
    protected static ?string $navigationLabel = 'Resep Obat';
    protected static ?int    $navigationSort  = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('pemeriksaan_id')
                ->label('Pemeriksaan')
                ->relationship('pemeriksaan', 'id')
                ->searchable()
                ->preload()
                ->required()
                ->getOptionLabelFromRecordUsing(
                    fn ($record) => "{$record->pasien->nama} - {$record->tanggal_periksa->format('d/m/Y')}"
                ),

            Forms\Components\TextInput::make('nama_obat')
                ->label('Nama Obat')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('dosis')
                ->label('Dosis')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: 3x1 tablet'),

            Forms\Components\TextInput::make('jumlah')
                ->label('Jumlah')
                ->numeric()
                ->required()
                ->minValue(1),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pemeriksaan.pasien.nama')
                    ->label('Pasien')
                    ->searchable(),

                Tables\Columns\TextColumn::make('pemeriksaan.tanggal_periksa')
                    ->label('Tgl Periksa')
                    ->date('d M Y'),

                Tables\Columns\TextColumn::make('nama_obat')
                    ->label('Nama Obat')
                    ->searchable(),

                Tables\Columns\TextColumn::make('dosis')
                    ->label('Dosis'),

                Tables\Columns\TextColumn::make('jumlah')
                    ->label('Jumlah')
                    ->badge()
                    ->color('warning'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                        ->visible(fn () => auth()->check() && auth()->user()->hasRole('admin')),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(fn () => auth()->check() && auth()->user()->hasRole('admin')),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListResepObats::route('/'),
            'create' => Pages\CreateResepObat::route('/create'),
            'edit'   => Pages\EditResepObat::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['pemeriksaan.pasien']);
    }
}