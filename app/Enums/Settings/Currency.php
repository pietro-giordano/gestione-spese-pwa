<?php

namespace App\Enums\Settings;

enum Currency: string
{
    case EUR = 'EUR';
    case USD = 'USD';
    case GBP = 'GBP';
    case JPY = 'JPY';
    case AUD = 'AUD';
    case CAD = 'CAD';
    case CHF = 'CHF';
    case CNY = 'CNY';
    case SEK = 'SEK';
    case NZD = 'NZD';

    /**
     * Get the default currency.
     *
     * @return self
     */
    public static function default(): self
    {
        return self::EUR;
    }

    /**
     * Get all available currencies.
     *
     * @return array<string>
     */
    public static function allCurrencies(): array
    {
        return array_column(self::cases(), 'value');
    }

    /**
     * Get the symbol for the default currency.
     *
     * @return string
     */
    public static function symbol(string $currency): string
    {
        return match ($currency) {
            self::EUR->value => '€',
            self::USD->value => '$',
            self::GBP->value => '£',
            self::JPY->value => '¥',
            self::AUD->value => 'A$',
            self::CAD->value => 'C$',
            self::CHF->value => 'CHF',
            self::CNY->value => '¥',
            self::SEK->value => 'kr',
            self::NZD->value => 'NZ$',
            default => $currency,
        };
    }
}
