<?php

namespace JeffersonGoncalves\FilamentCommerce\Currency;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCommerceCurrencyServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-commerce-currency';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasConfigFile();
    }
}
