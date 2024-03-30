<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatrocinadoreResource\Pages;
use App\Filament\Resources\PatrocinadoreResource\RelationManagers;
use App\Models\Patrocinadore;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatrocinadoreResource extends Resource
{
    protected static ?string $model = Patrocinadore::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('img_path')
                    ->required()
                    ->maxLength(2048),
                Forms\Components\TextInput::make('descripcion')
                    ->maxLength(255),
                Forms\Components\Select::make('congreso_id')
                    ->relationship('congreso', 'id')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('img_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('congreso.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListPatrocinadores::route('/'),
            'create' => Pages\CreatePatrocinadore::route('/create'),
            'edit' => Pages\EditPatrocinadore::route('/{record}/edit'),
        ];
    }
}
