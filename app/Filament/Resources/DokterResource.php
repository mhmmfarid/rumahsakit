<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DokterResource\Pages;
use App\Models\Dokter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DokterResource extends Resource
{
    protected static ?string $model = Dokter::class;

    protected static ?string $navigationIcon  = 'heroicon-o-user';
    protected static ?string $navigationGroup = 'Data Master';
    protected static ?string $navigationLabel = 'Dokter';
    protected static ?int    $navigationSort  = 2;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informasi Dokter')
                ->schema([
                    Forms\Components\TextInput::make('nama')
                        ->label('Nama Dokter')
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('spesialis')
                        ->label('Spesialis')
                        ->required()
                        ->maxLength(100),

                    Forms\Components\TextInput::make('no_hp')
                        ->label('No. HP')
                        ->tel()
                        ->required()
                        ->maxLength(20),

                    Forms\Components\Textarea::make('alamat')
                        ->label('Alamat')
                        ->required()
                        ->rows(3)
                        ->columnSpanFull(),
                ])
                ->columns(2),

            Forms\Components\Section::make('Foto Dokter')
                ->schema([
                    Forms\Components\FileUpload::make('foto_dokter')
                        ->label('Foto Dokter')
                        ->image()
                        ->directory('dokter')
                        ->disk('public')
                        ->imagePreviewHeight('150')
                        ->maxSize(2048)
                        ->nullable()
                        ->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('foto_dokter')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),

                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Dokter')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('spesialis')
                    ->label('Spesialis')
                    ->color('info')
                    ->searchable(),

                Tables\Columns\TextColumn::make('no_hp')
                    ->label('No. HP'),

                Tables\Columns\TextColumn::make('pemeriksaans_count')
                    ->label('Jumlah Periksa')
                    ->counts('pemeriksaans')
                    ->badge()
                    ->color('success'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
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
            'index'  => Pages\ListDokters::route('/'),
            'create' => Pages\CreateDokter::route('/create'),
            'edit'   => Pages\EditDokter::route('/{record}/edit'),
        ];
    }
}