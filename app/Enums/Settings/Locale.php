<?php

namespace App\Enums\Settings;

enum Locale: string
{
    case IT = 'it';
    case EN = 'en';

    /**
     * Get the default locale.
     *
     * @return self
     */
    public static function default(): self
    {
        return self::IT;
    }

    /**
     * Get all available locales.
     *
     * @return array<string>
     */
    public static function allLocales(): array
    {
        return array_column(self::cases(), 'value');
    }
}
