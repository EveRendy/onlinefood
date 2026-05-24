<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Schemas\Schema;

use Filament\Forms\Components\TextInput;

use Filament\Forms\Components\Select;

use Spatie\Permission\Models\Role;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('password')
                    ->password()
                    ->required(),
                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->required()
                    ->preload()
                    ->searchable()
                    ->multiple(false),
            ]);
    }
}
