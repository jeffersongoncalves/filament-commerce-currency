<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\FilamentCommerce\Currency\Concerns\HasCommerceCurrencyPluginConfig;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\CurrencyResource;

class CommerceCurrencyPlugin implements Plugin
{
    use HasCommerceCurrencyPluginConfig;

    public function getId(): string
    {
        return 'filament-commerce-currency';
    }

    public function register(Panel $panel): void
    {
        $panel->resources($this->resolveResources([
            'currency' => CurrencyResource::class,
        ]));

        $panel->widgets($this->resolveWidgets());
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
