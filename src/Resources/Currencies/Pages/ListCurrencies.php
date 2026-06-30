<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\CurrencyResource;

class ListCurrencies extends ListRecords
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
