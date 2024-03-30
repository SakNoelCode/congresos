<?php

namespace App\Filament\Resources\CongresoResource\Pages;

use App\Filament\Resources\CongresoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCongreso extends CreateRecord
{
    protected static string $resource = CongresoResource::class;

    /**
     * Personalizar guardado
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['es_seleccionado'] = false;

        return $data;
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
