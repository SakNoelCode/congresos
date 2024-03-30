<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PonenteResource\Pages;
use App\Filament\Resources\PonenteResource\RelationManagers;
use App\Models\Ponente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PonenteResource extends Resource
{
    protected static ?string $model = Ponente::class;

    protected static ?string $navigationIcon = 'heroicon-s-user-group';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('nombres')
                    ->label('Nombres y apellidos:')
                    ->autofocus()
                    ->placeholder('Christopher Alan Estrada Gonzalez')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion_breve')
                    ->label('Descripción corta del ponente:')
                    ->placeholder('Profesional con habilidades en proyectos de emprendimiento, mentoreo de startups, desarrollo de software y algoritmos de machine learning e inteligencia artificial.')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion_larga')
                    ->label('Descripción larga')
                    ->placeholder('Es Ingeniero en mecatrónica formado en la Universidad Tecnológica de Nayarit (México). Amplia experiencia y habilidades en proyectos de emprendimiento, mentoreo de startups, desarrollo de software, algoritmos de machine learning e inteligencia artificial.
                    En los últimos 3 años ha trabajado en proyectos de innovación aplicados al sector gubernamental.
                    Habilidades avanzadas en Programación con SQL, Diseño CAD, Programación de sistemas open source: Raspberry Pi, Arduino; Programación de microcontroladores.
                    Premio al Desempeño de Excelencia CENEVAL, por el puntaje obtenido en el examen EGEL de Ing. en Mecatrónica.
                    Premio Estatal a la Juventud 2012, entregado por el Gobierno del Estado de Nayarit, México.
                    Presea Bernardo Quintana 2013 (premio nacional otorgado por el CONALEP).')
                    ->rows(8)
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('img_path')
                    ->required()
                    ->maxLength(2048),
                Forms\Components\TextInput::make('gerundio')
                    ->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('centro_estudios')
                    ->required()
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
                Tables\Columns\TextColumn::make('gerundio')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombres')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion_breve')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion_larga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img_path')
                    ->searchable(),
                Tables\Columns\TextColumn::make('centro_estudios')
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
            'index' => Pages\ListPonentes::route('/'),
            'create' => Pages\CreatePonente::route('/create'),
            'edit' => Pages\EditPonente::route('/{record}/edit'),
        ];
    }
}
