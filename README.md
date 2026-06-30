<p align="center"><img src="art/banner.png" alt="Currency" width="100%"></p>

# Currency

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-commerce-currency.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-currency) [![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-commerce-currency.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-commerce-currency) [![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-commerce-currency.svg?style=flat-square)](LICENSE.md)

Filament v5 admin resources for the Laravel Commerce currency module.

## Installation

```bash
composer require jeffersongoncalves/filament-commerce-currency
```

## Usage

The plugin is auto-discovered. Register it on a Filament panel:

```php
use JeffersonGoncalves\\FilamentCommerce\\Umbrella\\CommercePanelPlugin;

public function panel(Panel $panel): Panel
{
    return $panel->plugin(CommercePanelPlugin::make());
}
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
