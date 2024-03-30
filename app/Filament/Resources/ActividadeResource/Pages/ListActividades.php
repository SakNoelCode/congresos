<?php

namespace App\Filament\Resources\ActividadeResource\Pages;

use App\Filament\Resources\ActividadeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActividades extends ListRecords
{
    protected static string $resource = ActividadeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
