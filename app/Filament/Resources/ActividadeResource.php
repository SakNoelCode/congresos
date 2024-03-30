<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ActividadeResource\Pages;
use App\Filament\Resources\ActividadeResource\RelationManagers;
use App\Models\Actividade;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActividadeResource extends Resource
{
    protected static ?string $model = Actividade::class;

    protected static ?string $modelLabel = 'Actividad';

    protected static ?string $pluralModelLabel = 'Actividades';

    protected static ?string $navigationIcon = 'heroicon-s-clipboard';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('hora_inicio')
                    ->required(),
                Forms\Components\TextInput::make('hora_fin')
                    ->required(),
                Forms\Components\TextInput::make('encabezado')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img_bandera_path')
                    ->maxLength(2048),
                Forms\Components\Toggle::make('es_ponencia')
                    ->required(),
                Forms\Components\Select::make('ponente_id')
                    ->relationship('ponente', 'id'),
                Forms\Components\TextInput::make('congreso_id')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hora_inicio'),
                Tables\Columns\TextColumn::make('hora_fin'),
                Tables\Columns\TextColumn::make('encabezado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img_bandera_path')
                    ->searchable(),
                Tables\Columns\IconColumn::make('es_ponencia')
                    ->boolean(),
                Tables\Columns\TextColumn::make('ponente.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('congreso_id')
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
            'index' => Pages\ListActividades::route('/'),
            'create' => Pages\CreateActividade::route('/create'),
            'edit' => Pages\EditActividade::route('/{record}/edit'),
        ];
    }
}
