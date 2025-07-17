<?php

namespace App\Filament\Admin\Resources\ProgramstudiResource\Pages;

use App\Filament\Admin\Resources\ProgramstudiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgramstudi extends EditRecord
{
    protected static string $resource = ProgramstudiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
