<?php

namespace App\Enums\Settings;

enum Theme: string
{
    case SYSTEM = 'system';
    case LIGHT = 'light';
    case DARK = 'dark';

    /**
     * Get the default theme.
     *
     * @return self
     */
    public static function default(): self
    {
        return self::SYSTEM;
    }

    /**
     * Get all available themes.
     *
     * @return array<string>
     */
    public static function allThemes(): array
    {
        return array_column(self::cases(), 'value');
    }
}
