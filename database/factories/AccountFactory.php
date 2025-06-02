<?php

namespace Database\Factories;

use App\Enums\Accounts\Type;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => fake()->company(),
            'type' => randomElement(Type::cases()),
            'balance' => fake()->randomFloat(2, 0, 10000),
            'is_active' => fake()->boolean(80),
        ];
    }
}
