<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
{
    private static $counter = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user_id = self::$counter++;

        return [
            'user_id' => $user_id,
            'first_name' => fake()->unique()->name(),
            'last_name' => fake()->unique()->name(),
            'birthday' => fake()->date(),
            'role_id' => fake()->numberBetween(1, 5),
        ];
    }
}
