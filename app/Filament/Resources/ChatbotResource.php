<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ChatbotResource\Pages;
use App\Filament\Resources\ChatbotResource\RelationManagers;
use App\Models\Chatbot;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use App\Models\Congreso;

class ChatbotResource extends Resource
{
    protected static ?string $model = Chatbot::class;

    protected static ?string $navigationIcon = 'heroicon-s-chat-bubble-oval-left-ellipsis';

    protected static ?int $navigationSort = 7;

    protected static ?string $modelLabel = 'nuevo registro';

    protected static ?string $pluralModelLabel = 'ChatBot';

    protected static ?string $slug = 'chatbot';

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
                Forms\Components\Textarea::make('descripcion')
                    ->label('Descripción:')
                    ->placeholder('¿Quieres saber cuál es el costo para participar en el evento?, La inscripción es totalmente gratuita. Se desarrollará bajo modalidad virtual')
                    ->required()
                    ->columnSpanFull()
                    ->maxLength(1000),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('descripcion')
                ->wrap(),
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
            'index' => Pages\ListChatbots::route('/'),
            'create' => Pages\CreateChatbot::route('/create'),
            'edit' => Pages\EditChatbot::route('/{record}/edit'),
        ];
    }
}
