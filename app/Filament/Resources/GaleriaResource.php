<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GaleriaResource\Pages;
use App\Filament\Resources\GaleriaResource\RelationManagers;
use App\Models\Congreso;
use App\Models\Galeria;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GaleriaResource extends Resource
{
    protected static ?string $model = Galeria::class;

    protected static ?string $modelLabel = 'nuevo registro';

    protected static ?string $pluralModelLabel = 'Galería';

    protected static ?string $navigationIcon = 'heroicon-s-camera';

    protected static ?string $slug = 'galeria';

    protected static ?int $navigationSort = 5;

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
                    ->placeholder('Imagen del congreso donde el rector da la bienvenida a todos los invitados')
                    ->columnSpanFull()
                    ->label('Descripción de la Imagen:')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('img_path')
                    ->columnSpanFull()
                    ->label('Suba una imagen del congreso:')
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
            'index' => Pages\ListGalerias::route('/'),
            'create' => Pages\CreateGaleria::route('/create'),
            'edit' => Pages\EditGaleria::route('/{record}/edit'),
        ];
    }
}
