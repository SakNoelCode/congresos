<?php

namespace App\Filament\Resources\PonenteResource\Pages;

use App\Filament\Resources\PonenteResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePonente extends CreateRecord
{
    protected static string $resource = PonenteResource::class;

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
        return 'Ponente registrado';
    }
}
