<?php

namespace App\Filament\Resources\InvitadoResource\Pages;

use App\Filament\Resources\InvitadoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvitado extends EditRecord
{
    protected static string $resource = InvitadoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
