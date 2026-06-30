<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies;

use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use JeffersonGoncalves\Commerce\Currency\Models\Currency;
use JeffersonGoncalves\FilamentCommerce\Currency\CommerceCurrencyPlugin;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages\CreateCurrency;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages\EditCurrency;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages\ListCurrencies;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Schemas\CurrencyForm;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Tables\CurrenciesTable;

class CurrencyResource extends Resource
{
    protected static ?string $model = Currency::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBanknotes;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getNavigationGroup(): ?string
    {
        try {
            return CommerceCurrencyPlugin::get()->getNavigationGroup();
        } catch (\Throwable) {
            return config('filament-commerce-currency.navigation_group', 'Commerce — Configuration');
        }
    }

    public static function form(Schema $schema): Schema
    {
        return CurrencyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CurrenciesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCurrencies::route('/'),
            'create' => CreateCurrency::route('/create'),
            'edit' => EditCurrency::route('/{record}/edit'),
        ];
    }
}
