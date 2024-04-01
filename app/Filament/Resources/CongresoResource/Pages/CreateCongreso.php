<?php

namespace App\Filament\Resources\CongresoResource\Pages;

use App\Filament\Resources\CongresoResource;
use App\Models\Congreso;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCongreso extends CreateRecord
{
    protected static string $resource = CongresoResource::class;

    /**
     * Personalizar guardado
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return $data;
    }

    /**
     * Personalizar proceso de creación
     */
    protected function handleRecordCreation(array $data): Model
    {
        $congresos = Congreso::all();
        foreach ($congresos as $item) {
            $item->update([
                'es_seleccionado' => false,
            ]);
        }   
        return static::getModel()::create($data);
    }


    /**
     * Personalizar redireccion
     */
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Personalizar Mensaje
     */
    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Congreso registrado';
    }
}
