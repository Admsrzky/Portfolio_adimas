<?php

namespace App\Filament\Resources\WorkProcessResource\Pages;

use App\Filament\Resources\WorkProcessResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWorkProcesses extends ListRecords
{
    protected static string $resource = WorkProcessResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
