<?php

namespace App\Filament\Resources\ProgramaResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ActividadesRelationManager extends RelationManager
{
    protected static string $relationship = 'actividades';

    protected static ?string $modelLabel = 'Actividad';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TimePicker::make('hora_inicio')
                    ->label('Hora de Inicio:')
                    ->seconds(false)
                    ->helperText('Considere formato de 24 horas')
                    ->required(),
                Forms\Components\TimePicker::make('hora_fin')
                    ->label('Hora final:')
                    ->seconds(false)
                    ->helperText('Considere formato de 24 horas')
                    ->required(),
                Forms\Components\TextInput::make('encabezado')
                    ->label('Encabezado:')
                    ->placeholder('Palabras de Bienvenida / Tendencias de la inteligencia artificial para la innovacion y emprendimiento.')
                    ->helperText('Considere el formato correcto si se trata de una ponencia o una actividad')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Puede ser una ponencia o una actividad')
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('descripcion')
                    ->label('Descripción:')
                    ->placeholder('A cargo del Rector de la UNTRM, Dr. Policarpio Chauca Valqui')
                    ->helperText('Recuerde: Llene este campo solo si es una actividad')
                    ->columnSpanFull()
                    //->required()
                    ->maxLength(255),
                Forms\Components\Select::make('ponente_id')
                    ->label('Ponente:')
                    ->helperText('Recuerde: Llene este campo solo si es una ponencia')
                    ->columnSpanFull()
                    ->searchable()
                    ->preload()
                    ->relationship('ponente', 'nombres'),
                Forms\Components\Toggle::make('es_ponencia')
                    ->columnSpanFull()
                    ->required(),
                Forms\Components\FileUpload::make('img_bandera_path')
                    ->helperText('Recuerde: Llene este campo solo si es una ponencia')
                    ->label('Imagen de bandera representativa:')
                    ->image()
                    ->imageEditor(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('encabezado')
            ->columns([
                Tables\Columns\TextColumn::make('encabezado'),
                Tables\Columns\TextColumn::make('hora_inicio')
                    ->time('h:i'),
                Tables\Columns\TextColumn::make('hora_fin')
                    ->time('h:i'),
                Tables\Columns\IconColumn::make('es_ponencia')
                    ->label('Ponencia')
                    ->boolean()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
