<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramaResource\Pages;
use App\Filament\Resources\ProgramaResource\RelationManagers;
use App\Models\Congreso;
use App\Models\Programa;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramaResource extends Resource
{
    protected static ?string $model = Programa::class;

    protected static ?string $modelLabel = 'Programación';

    protected static ?string $pluralModelLabel = 'Programación';

    protected static ?string $navigationIcon = 'heroicon-s-calendar';

    protected static ?string $navigationLabel = 'Programación';

    protected static ?string $slug = 'programacion';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('encabezado')
                    ->label('Encabezado de la programación:')
                    ->placeholder('Martes 15')
                    ->autofocus()
                    ->columnSpanFull()
                    ->helperText('Por conveniencia, en el encabezado se pone el día y la fecha')
                    ->required()
                    ->maxLength(100),
                Forms\Components\Select::make('congreso_id')
                    ->label('Seleccionar congreso:')
                    ->relationship('congreso', 'nombre')
                    ->default(
                        function () {
                            $congreso_id = Congreso::where('es_seleccionado', true)->first()->id;
                            return $congreso_id;
                        }
                    )
                    ->columnSpanFull()
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Por defecto se seleccionara el congreso activo')
                    ->selectablePlaceholder(false)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('encabezado')
                    ->searchable(),
                Tables\Columns\TextColumn::make('congreso.nombre'),
                //->numeric()
                //->sortable(),
                /*   Tables\Columns\TextColumn::make('created_at')
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
            'index' => Pages\ListProgramas::route('/'),
            'create' => Pages\CreatePrograma::route('/create'),
            'edit' => Pages\EditPrograma::route('/{record}/edit'),
        ];
    }
}
