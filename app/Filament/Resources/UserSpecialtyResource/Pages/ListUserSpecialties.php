<?php

namespace App\Filament\Resources\UserSpecialtyResource\Pages;

use App\Filament\Resources\UserSpecialtyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserSpecialties extends ListRecords
{
    protected static string $resource = UserSpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
