<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatrocinadoreResource\Pages;
use App\Filament\Resources\PatrocinadoreResource\RelationManagers;
use App\Models\Congreso;
use App\Models\Patrocinadore;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PatrocinadoreResource extends Resource
{
    protected static ?string $model = Patrocinadore::class;

    protected static ?string $modelLabel = 'Patrocinador';

    protected static ?string $pluralModelLabel = 'Patrocinadores';

    protected static ?string $navigationIcon = 'heroicon-s-currency-dollar';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('congreso_id')
                    ->label('Seleccionar congreso:')
                    ->relationship('congreso')
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->numeracion} {$record->nombre_1} {$record->nombre_2}")
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
                Forms\Components\TextInput::make('descripcion')
                    ->helperText('Necesario para el atributo title de la imagen')
                    ->placeholder('Patrocinador de la tienda Orion S.R.L')
                    ->columnSpanFull()
                    ->label('Descripción de la Imagen:')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('img_path')
                    ->columnSpanFull()
                    ->label('Suba una imagen referencial del patrocinador:')
                    ->image()
                    ->imageEditor()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('img_path')
                    ->label('Imagen')
                    ->size(300),
                Tables\Columns\TextColumn::make('descripcion')
                    ->label('Descripción')
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
