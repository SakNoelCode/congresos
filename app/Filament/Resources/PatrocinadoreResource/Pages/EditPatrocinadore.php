<?php

namespace App\Filament\Resources\PatrocinadoreResource\Pages;

use App\Filament\Resources\PatrocinadoreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPatrocinadore extends EditRecord
{
    protected static string $resource = PatrocinadoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
