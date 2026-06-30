<?php

use JeffersonGoncalves\Commerce\Currency\Models\Currency;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages\CreateCurrency;
use JeffersonGoncalves\FilamentCommerce\Currency\Resources\Currencies\Pages\ListCurrencies;
use Livewire\Livewire;

it('renders the currency list page', function () {
    Currency::factory()->count(3)->create();

    Livewire::test(ListCurrencies::class)->assertOk();
});

it('creates a currency through the panel', function () {
    Livewire::test(CreateCurrency::class)
        ->fillForm([
            'code' => 'usd',
            'name' => 'US Dollar',
            'symbol' => '$',
            'symbol_native' => '$',
            'decimal_digits' => 2,
            'rounding' => 0,
        ])
        ->call('create')
        ->assertHasNoFormErrors();

    expect(Currency::query()->whereKey('usd')->exists())->toBeTrue();
});
