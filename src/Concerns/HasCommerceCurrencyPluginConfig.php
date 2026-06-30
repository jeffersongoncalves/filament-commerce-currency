<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency\Concerns;

use JeffersonGoncalves\FilamentCommerce\Core\Concerns\HasCommercePluginConfig;

trait HasCommerceCurrencyPluginConfig
{
    use HasCommercePluginConfig;

    protected function getConfigKey(): string
    {
        return 'filament-commerce-currency';
    }

    protected function getDefaultNavigationGroup(): string
    {
        return 'Commerce — Configuration';
    }
}
