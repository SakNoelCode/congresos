<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PonenteResource\Pages;
use App\Filament\Resources\PonenteResource\RelationManagers;
use App\Models\Congreso;
use App\Models\Ponente;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
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
                Forms\Components\RichEditor::make('descripcion_larga')
                    ->helperText('Maximo 1000 caracteres')
                    ->label('Descripción larga:')
                    ->disableToolbarButtons([
                        'attachFiles',
                        'strike',
                    ])
                    ->columnSpanFull()
                    ->required()
                    ->maxLength(1000),
                Forms\Components\TextInput::make('gerundio')
                    ->label('Gerundio:')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Jerarquía o cargo del ponente')
                    ->placeholder('Dr., Ing. Bach.')
                    //->required()
                    ->maxLength(30),
                Forms\Components\TextInput::make('centro_estudios')
                    ->label('Centro de estudios:')
                    ->hintIcon('heroicon-m-question-mark-circle', tooltip: 'Universidad o institución que representa')
                    ->placeholder('Universidad Peruana de Ciencias Aplicadas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('congreso_id')
                    ->label('Congreso que participa:')
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
                Forms\Components\FileUpload::make('img_path')
                    ->label('Imagen representativa del ponente:')
                    ->image()
                    ->imageEditor()
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
                    ->label('Nombres y Apellidos')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('img_path')
                    ->circular()
                    ->size(120),
                Tables\Columns\TextColumn::make('centro_estudios')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                /*
                Tables\Columns\TextColumn::make('descripcion_breve')
                    ->searchable(),
                Tables\Columns\TextColumn::make('descripcion_larga')
                    ->searchable(),
                Tables\Columns\TextColumn::make('img_path')
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
            'index' => Pages\ListPonentes::route('/'),
            'create' => Pages\CreatePonente::route('/create'),
            'edit' => Pages\EditPonente::route('/{record}/edit'),
        ];
    }
}
