<?php

namespace App\Filament\Resources\UserSpecialtyResource\Pages;

use App\Filament\Resources\UserSpecialtyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserSpecialty extends EditRecord
{
    protected static string $resource = UserSpecialtyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
