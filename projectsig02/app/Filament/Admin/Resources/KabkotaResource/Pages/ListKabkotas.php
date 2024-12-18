<?php

namespace App\Filament\Admin\Resources\KabkotaResource\Pages;

use App\Filament\Admin\Resources\KabkotaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKabkotas extends ListRecords
{
    protected static string $resource = KabkotaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
