<?php

namespace App\Enums\Accounts;

enum Type: string
{
    case CASH = 'cash';
    case BANK = 'bank';
    case CREDIT_CARD = 'credit_card';
    case INVESTMENT = 'investment';
    case LOAN = 'loan';
    case ASSET = 'asset';
    case LIABILITY = 'liability';
    case OTHER = 'other';

    /**
     * Get the display label for the current status
     */
    public function getLabelText(): string
    {
        return match ($this) {
            self::CASH => 'Contante',
            self::BANK => 'Banca',
            self::CREDIT_CARD => 'Carta di Credito',
            self::INVESTMENT => 'Investimento',
            self::LOAN => 'Prestito',
            self::ASSET => 'Asset',
            self::LIABILITY => 'Passività',
            self::OTHER => 'Altro',
        };
    }
}
