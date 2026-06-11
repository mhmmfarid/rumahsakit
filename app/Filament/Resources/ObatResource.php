<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ObatResource\Pages;
use App\Models\Obat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ObatResource extends Resource
{
    protected static ?string $model = Obat::class;

    protected static ?string $navigationIcon  = 'heroicon-o-beaker';
    protected static ?string $navigationGroup = 'Data Master';
    protected static ?string $navigationLabel = 'Obat';
    protected static ?int    $navigationSort  = 4;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('nama_obat')
                ->label('Nama Obat')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('kategori')
                ->label('Kategori')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('stok')
                ->label('Stok')
                ->numeric()
                ->required()
                ->minValue(0),

            Forms\Components\TextInput::make('harga')
                ->label('Harga (Rp)')
                ->numeric()
                ->required()
                ->minValue(0)
                ->prefix('Rp'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_obat')
                    ->label('Nama Obat')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\BadgeColumn::make('kategori')
                    ->label('Kategori')
                    ->color('info'),

                Tables\Columns\TextColumn::make('stok')
                    ->label('Stok')
                    ->badge()
                    ->color(fn ($state) => $state < 10 ? 'danger' : 'success'),

                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->money('IDR')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->options(fn () => Obat::distinct()->pluck('kategori', 'kategori')->toArray()),
            ])
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
            'index'  => Pages\ListObats::route('/'),
            'create' => Pages\CreateObat::route('/create'),
            'edit'   => Pages\EditObat::route('/{record}/edit'),
        ];
    }
}