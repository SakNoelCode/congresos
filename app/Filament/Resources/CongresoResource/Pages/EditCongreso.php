<?php

namespace App\Filament\Resources\CongresoResource\Pages;

use App\Filament\Resources\CongresoResource;
use App\Models\Congreso;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditCongreso extends EditRecord
{
    protected static string $resource = CongresoResource::class;

    /**
     * Personalizar proceso de guardado
     */
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $congresos = Congreso::all()->except($record->id);
        foreach ($congresos as $item) {
            $item->update([
                'es_seleccionado' => false,
            ]);
        }

        $record->update($data);
        return $record;
    }

    /**
     * Redireccion personalizada
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Personalizar mensaje
     */
    protected function getSavedNotificationTitle(): ?string
    {
        return 'Congreso actualizado';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
