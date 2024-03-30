<?php

namespace App\Filament\Resources\PatrocinadoreResource\Pages;

use App\Filament\Resources\PatrocinadoreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPatrocinadores extends ListRecords
{
    protected static string $resource = PatrocinadoreResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
