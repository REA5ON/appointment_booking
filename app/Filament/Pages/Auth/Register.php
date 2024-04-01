<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Auth\Register as BaseRegister;

class Register extends BaseRegister
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                        $this->getSpecialtyFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getSpecialtyFormComponent(): Component
    {
        return Select::make('specialty')
            ->options([
                'nails' => 'Nails',
                'brows' => 'Brows',
                'hair' => 'Hair',
                'tattoo' => 'Tattoo',
                'lips' => 'Lips',
                'skin' => 'Skin',
            ])
            ->required();
    }
}
