<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserSpecialtyResource\Pages;
use App\Models\Specialty;
use App\Models\UserSpecialty;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UserSpecialtyResource extends Resource
{
    protected static ?string $model = UserSpecialty::class;

    protected static ?string $navigationIcon = 'gameicon-skills';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('specialty_id')
                    ->label('Specialty')
                    ->options(Specialty::all()->pluck('name', 'id'))
                    ->searchable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('specialty.name'),
                TextColumn::make('specialty.description')
                    ->label('Description'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserSpecialties::route('/'),
            'create' => Pages\CreateUserSpecialty::route('/create'),
            'edit' => Pages\EditUserSpecialty::route('/{record}/edit'),
        ];
    }
}
