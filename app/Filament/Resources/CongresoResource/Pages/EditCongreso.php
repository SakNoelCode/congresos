<?php

namespace App\Filament\Resources\CongresoResource\Pages;

use App\Filament\Resources\CongresoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCongreso extends EditRecord
{
    protected static string $resource = CongresoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
