<?php

namespace App\Filament\Resources\PatrocinadoreResource\Pages;

use App\Filament\Resources\PatrocinadoreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePatrocinadore extends CreateRecord
{
    protected static string $resource = PatrocinadoreResource::class;

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
        return 'Patrocinador registrado';
    }
}
