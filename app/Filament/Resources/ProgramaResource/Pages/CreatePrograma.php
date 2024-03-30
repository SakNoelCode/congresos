<?php

namespace App\Filament\Resources\ProgramaResource\Pages;

use App\Filament\Resources\ProgramaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePrograma extends CreateRecord
{
    protected static string $resource = ProgramaResource::class;

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
        return 'Programación registrada';
    }
}
