<?php

namespace App\Filament\Resources\ChatbotResource\Pages;

use App\Filament\Resources\ChatbotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditChatbot extends EditRecord
{
    protected static string $resource = ChatbotResource::class;

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
        return 'Registro actualizado';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
