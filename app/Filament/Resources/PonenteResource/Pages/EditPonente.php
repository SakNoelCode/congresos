<?php

namespace App\Filament\Resources\PonenteResource\Pages;

use App\Filament\Resources\PonenteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPonente extends EditRecord
{
    protected static string $resource = PonenteResource::class;

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
        return 'Ponente actualizado';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
