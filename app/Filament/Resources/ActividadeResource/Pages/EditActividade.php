<?php

namespace App\Filament\Resources\ActividadeResource\Pages;

use App\Filament\Resources\ActividadeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActividade extends EditRecord
{
    protected static string $resource = ActividadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
