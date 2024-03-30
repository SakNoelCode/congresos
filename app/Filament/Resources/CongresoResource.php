<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CongresoResource\Pages;
use App\Filament\Resources\CongresoResource\RelationManagers;
use App\Models\Congreso;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CongresoResource extends Resource
{
    protected static ?string $model = Congreso::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_inicio')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_fin')
                    ->required(),
                Forms\Components\TextInput::make('tag_fecha')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_lugar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_horarrio')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tema')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('es_seleccionado')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_inicio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_fin')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tag_fecha')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag_lugar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tag_horarrio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tema')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\IconColumn::make('es_seleccionado')
                    ->boolean(),
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
            'index' => Pages\ListCongresos::route('/'),
            'create' => Pages\CreateCongreso::route('/create'),
            'edit' => Pages\EditCongreso::route('/{record}/edit'),
        ];
    }
}
