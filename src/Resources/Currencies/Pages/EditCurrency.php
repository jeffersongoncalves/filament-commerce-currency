<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages;

use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\CurrencyResource;

class EditCurrency extends EditRecord
{
    protected static string $resource = CurrencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
