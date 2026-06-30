<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Tests\Fixtures;

use Filament\Panel;
use Filament\PanelProvider;
use JeffersonGoncalves\FilamentCommerce\Currency\CommerceCurrencyPlugin;

class TestPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->plugins([
                CommerceCurrencyPlugin::make(),
            ]);
    }
}
