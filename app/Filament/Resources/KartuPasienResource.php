<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KartuPasienResource\Pages;
use App\Models\KartuPasien;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class KartuPasienResource extends Resource
{
    protected static ?string $model = KartuPasien::class;

    protected static ?string $navigationIcon = 'heroicon-o-identification';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?string $navigationLabel = 'Kartu Pasien';

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
            Forms\Components\Select::make('pasien_id')
                ->relationship('pasien', 'nama')
                ->label('Pasien')
                ->searchable()
                ->required(),

            Forms\Components\TextInput::make('nomor_kartu')
                ->label('Nomor Kartu')
                ->required()
                ->unique(),

            Forms\Components\DatePicker::make('tanggal_terbit')
                ->label('Tanggal Terbit')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nomor_kartu')->label('Nomor Kartu')->searchable(),
            Tables\Columns\TextColumn::make('pasien.nama')->label('Nama Pasien')->searchable(),
            Tables\Columns\TextColumn::make('tanggal_terbit')->label('Tanggal Terbit')->date('d M Y')->sortable(),
        ])->actions([
            Tables\Actions\ViewAction::make(),
            Tables\Actions\EditAction::make()->visible(fn () => Auth::user()->hasAnyRole(['admin', 'petugas'])),
            Tables\Actions\DeleteAction::make()->visible(fn () => Auth::user()->hasRole('admin')),
        ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKartuPasiens::route('/'),
            'create' => Pages\CreateKartuPasien::route('/create'),
            'edit' => Pages\EditKartuPasien::route('/{record}/edit'),
        ];
    }
}
