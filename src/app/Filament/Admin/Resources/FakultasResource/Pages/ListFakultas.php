<?php

namespace App\Filament\Admin\Resources\FakultasResource\Pages;

use App\Filament\Admin\Resources\FakultasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFakultas extends ListRecords
{
    protected static string $resource = FakultasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
