<?php

namespace App\Filament\Resources\UserSpecialtyResource\Pages;

use App\Filament\Resources\UserSpecialtyResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUserSpecialty extends CreateRecord
{
    protected static string $resource = UserSpecialtyResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();

        return $data;
    }
}
