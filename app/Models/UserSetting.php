<?php

namespace App\Models;

use App\Enums\Settings\Currency;
use App\Enums\Settings\Theme;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Locale;

class UserSetting extends Model
{
    /** @use HasFactory<\Database\Factories\UserSettingFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'theme',
        'currency',
        'locale',
        'notifications_enabled',
    ];

    protected $casts = [
        'theme' => Theme::class,
        'currency' => Currency::class,
        'locale' => Locale::class,
        'notifications_enabled' => 'boolean',
    ];

    /**
     * Get the default settings for a new user.
     *
     * @return array
     */
    public static function defaultSettings(): array
    {
        return [
            'theme' => Theme::default()->value,
            'currency' => Currency::default()->value,
            'locale' => Locale::default()->value,
            'notifications_enabled' => true,
        ];
    }

    // RELATIONS
    /**
     * Get the user that owns the settings.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
