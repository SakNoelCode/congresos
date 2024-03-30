<?php

namespace App\Filament\Resources\PatrocinadoreResource\Pages;

use App\Filament\Resources\PatrocinadoreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatrocinadore extends EditRecord
{
    protected static string $resource = PatrocinadoreResource::class;

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
        return 'Patrocinador actualizado';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
