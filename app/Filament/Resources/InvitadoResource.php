<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvitadoResource\Pages;
use App\Filament\Resources\InvitadoResource\RelationManagers;
use App\Models\Invitado;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InvitadoResource extends Resource
{
    protected static ?string $model = Invitado::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('razon_social')
                    ->label('Nombres y Apellidos:')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('Correo electrónico:')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telefono')
                    ->label('Teléfono:')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tipo_documento')
                    ->label('Tipo de documento:')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('numero_documento')
                    ->label('Numero de documento:')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('institucion')
                    ->label('Institución:')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pais')
                    ->label('País:')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ciudad')
                    ->label('Ciudad:')
                    ->required()
                    ->maxLength(255),
                /*    Forms\Components\Select::make('congreso_id')
                    ->relationship('congreso', 'id')
                    ->required(),*/
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('razon_social')
                    ->label('Nombres y apellidos')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Correo electrónico')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telefono')
                    ->label('Teléfono')
                    ->searchable(),
                /*     Tables\Columns\TextColumn::make('tipo_documento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('numero_documento')
                    ->searchable(),
                Tables\Columns\TextColumn::make('institucion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pais')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ciudad')
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
                    ->toggleable(isToggledHiddenByDefault: true),*/
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                //Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListInvitados::route('/'),
            //'create' => Pages\CreateInvitado::route('/create'),
            //'edit' => Pages\EditInvitado::route('/{record}/edit'),
        ];
    }
}
