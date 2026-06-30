<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CurrencyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
            ->components([
                Section::make('Details')
                    ->schema([
                        TextInput::make('code')
                            ->required()
                            ->maxLength(3)
                            ->unique(ignoreRecord: true),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('symbol')
                            ->required()
                            ->maxLength(8),
                        TextInput::make('symbol_native')
                            ->label('Native Symbol')
                            ->required()
                            ->maxLength(8),
                        TextInput::make('decimal_digits')
                            ->label('Decimal Digits')
                            ->numeric()
                            ->default(2),
                        TextInput::make('rounding')
                            ->numeric()
                            ->default(0),
                    ])->columns(2),
            ]);
    }
}
