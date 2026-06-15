<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PemeriksaanResource\Pages;
use App\Models\Dokter;
use App\Models\Obat;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use App\Models\Poli;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PemeriksaanResource extends Resource
{
    protected static ?string $model = Pemeriksaan::class;

    protected static ?string $navigationIcon  = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationGroup = 'Pelayanan';
    protected static ?string $navigationLabel = 'Pemeriksaan';
    protected static ?int    $navigationSort  = 1;

    public static function canViewAny(): bool
    {
        return Auth::user()->hasAnyRole(['admin', 'petugas']);
    }

    public static function canCreate(): bool
    {
        return Auth::user()->hasAnyRole(['admin', 'petugas']);
    }

    public static function canEdit($record): bool
    {
        return Auth::user()->hasAnyRole(['admin', 'petugas']);
    }

    public static function canDelete($record): bool
    {
        return Auth::user()->hasRole('admin');
    }

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Data Pemeriksaan')
                ->schema([
                    Forms\Components\Select::make('pasien_id')
                        ->label('Pasien')
                        ->relationship('pasien', 'nama')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->no_rm} - {$record->nama}"),

                    Forms\Components\Select::make('dokter_id')
                        ->label('Dokter')
                        ->relationship('dokter', 'nama')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->nama} ({$record->spesialis})"),

                    Forms\Components\Select::make('poli_id')
                        ->label('Poli')
                        ->relationship('poli', 'nama_poli')
                        ->searchable()
                        ->preload()
                        ->required(),

                    Forms\Components\DatePicker::make('tanggal_periksa')
                        ->label('Tanggal Periksa')
                        ->required()
                        ->default(now()),

                    Forms\Components\Textarea::make('keluhan')
                        ->label('Keluhan')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),

                    Forms\Components\Textarea::make('diagnosa')
                        ->label('Diagnosa')
                        ->rows(3)
                        ->columnSpanFull(),

                    Forms\Components\TextInput::make('biaya')
                        ->label('Biaya (Rp)')
                        ->numeric()
                        ->required()
                        ->minValue(0)
                        ->prefix('Rp'),
                ])
                ->columns(2),

            Forms\Components\Section::make('Resep Obat')
                ->schema([
                    Forms\Components\Repeater::make('resepObats')
                        ->relationship('resepObats')
                        ->schema([
                            Forms\Components\TextInput::make('nama_obat')
                                ->label('Nama Obat')
                                ->required(),

                            Forms\Components\TextInput::make('dosis')
                                ->label('Dosis')
                                ->required()
                                ->placeholder('Contoh: 3x1 tablet'),

                            Forms\Components\TextInput::make('jumlah')
                                ->label('Jumlah')
                                ->numeric()
                                ->required()
                                ->minValue(1),
                        ])
                        ->columns(3)
                        ->addActionLabel('+ Tambah Resep')
                        ->collapsible()
                        ->defaultItems(0),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tanggal_periksa')
                    ->label('Tanggal')
                    ->date('d M Y')
                    ->sortable(),

                Tables\Columns\TextColumn::make('pasien.nama')
                    ->label('Pasien')
                    ->searchable(),

                Tables\Columns\TextColumn::make('pasien.no_rm')
                    ->label('No. RM')
                    ->badge()
                    ->color('primary'),

                Tables\Columns\TextColumn::make('dokter.nama')
                    ->label('Dokter')
                    ->searchable(),

                Tables\Columns\TextColumn::make('poli.nama_poli')
                    ->label('Poli')
                    ->badge()
                    ->color('info'),

                Tables\Columns\TextColumn::make('biaya')
                    ->label('Biaya')
                    ->money('IDR')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('dokter')
                    ->relationship('dokter', 'nama'),

                Tables\Filters\SelectFilter::make('poli')
                    ->relationship('poli', 'nama_poli'),

                Tables\Filters\Filter::make('tanggal_periksa')
                    ->form([
                        Forms\Components\DatePicker::make('dari'),
                        Forms\Components\DatePicker::make('sampai'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['dari'], fn ($q) => $q->whereDate('tanggal_periksa', '>=', $data['dari']))
                            ->when($data['sampai'], fn ($q) => $q->whereDate('tanggal_periksa', '<=', $data['sampai']));
                    }),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
                        ->visible(fn () => Auth::user()->hasAnyRole(['admin', 'petugas'])),
                    Tables\Actions\DeleteAction::make()
                        ->visible(fn () => Auth::user()->hasRole('admin')),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(fn () => Auth::user()->hasRole('admin')),
                ]),
            ])
            ->defaultSort('tanggal_periksa', 'desc');
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPemeriksaans::route('/'),
            'create' => Pages\CreatePemeriksaan::route('/create'),
            'edit'   => Pages\EditPemeriksaan::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->with(['pasien', 'dokter', 'poli']);
    }
}