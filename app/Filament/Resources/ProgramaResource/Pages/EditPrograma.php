<?php

namespace App\Filament\Resources\ProgramaResource\Pages;

use App\Filament\Resources\ProgramaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrograma extends EditRecord
{
    protected static string $resource = ProgramaResource::class;

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
        return 'Programación actualizada';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
