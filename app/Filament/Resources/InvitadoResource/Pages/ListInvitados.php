<?php

namespace App\Filament\Resources\InvitadoResource\Pages;

use App\Filament\Resources\InvitadoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListInvitados extends ListRecords
{
    protected static string $resource = InvitadoResource::class;

    /**
     * Pestañas de filtrado en la parte superior
     */
    public function getTabs(): array
    {
        return [
            'Congreso activo' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas(
                    'congreso',
                    function ($query) {
                        $query->where('es_seleccionado', true);
                    }
                )),
            'Otros congresos' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->whereHas(
                    'congreso',
                    function ($query) {
                        $query->where('es_seleccionado', false);
                    }
                )),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
           // Actions\CreateAction::make(),
        ];
    }
}
