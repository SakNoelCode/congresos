<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CongresoResource\Pages;
use App\Filament\Resources\CongresoResource\RelationManagers;
use App\Models\Congreso;
use Closure;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CongresoResource extends Resource
{
    protected static ?string $model = Congreso::class;

    protected static ?string $navigationIcon = 'heroicon-s-building-library';

    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('numeracion')
                    ->label('N°:')
                    ->placeholder('III')
                    ->autofocus()
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_1')
                    ->label('Primer encabezado:')
                    ->placeholder('CONGRESO INTERNACIONAL DE')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nombre_2')
                    ->label('Segundo encabezado:')
                    ->placeholder('INGENIERÍA DE SISTEMAS')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('fecha_inicio')
                    ->label('Fecha de Inicio:')
                    ->helperText('Fecha que iniciará el congreso')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_fin')
                    ->label('Fecha final:')
                    ->helperText('Fecha que culminará el congreso')
                    ->required(),
                Forms\Components\TextInput::make('tag_fecha')
                    ->label('Etiqueta para la fecha:')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Información referencial de la fecha')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('15, 16 y 17 de Diciembre')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_lugar')
                    ->label('Etiqueta del lugar:')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Información referencial del lugar')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('Bagua - Amazonas - Perú')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tag_horario')
                    ->label('Etiqueta del horario:')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Información referencial del horario')
                    ->required()
                    ->columnSpanFull()
                    ->placeholder('8:00 am - 1:40 pm')
                    ->maxLength(255),
                Forms\Components\TextInput::make('tema')
                    ->label('Tema:')
                    ->columnSpanFull()
                    ->placeholder('Tecnologías Emergentes para el Desarrollo Sostenible')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción:')
                    ->placeholder('En tiempos difíciles, los desafíos deben ser transfomados en retos y los retos en soluciones. Las Tecnologías de la Información, nuestra mejor herramienta.')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull()
                    ->maxLength(255),
                Forms\Components\Toggle::make('es_seleccionado')
                    ->helperText('Activar o desactivar el congreso')
                    ->label('Congreso seleccionado')
                    ->hiddenOn('create')
                    ->rules([
                        function (?Model $record) {
                            return function (string $attribute, $value, Closure $fail) use ($record) {
                                $existe = Congreso::where('es_seleccionado', true)
                                    ->where('id', '<>', $record->id)
                                    ->get();
                                if ($value === false && $existe) {
                                    $fail('Debe haber al menos un congreso activo.');
                                }
                            };
                        },
                    ])
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
                    ->label('Fecha de Inicio')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_fin')
                    ->label('Fecha final')
                    ->date()
                    ->sortable(),
                Tables\Columns\IconColumn::make('es_seleccionado')
                    //->sortable()
                    ->label('Estado')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->boolean(),
                /*       Tables\Columns\TextColumn::make('tag_fecha')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('tag_lugar')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('tag_horario')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('tema')
                    ->searchable()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('descripcion')
                    ->searchable()->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\IconColumn::make('es_seleccionado')
                    ->boolean(),
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
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('id', 'desc');
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
