<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    private static $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = 'category-' . self::$counter++;

        return [
            'name' => $category,
            'parent_id' => '0',
            'image' => fake()->image(),
            'status' => 'on',
            'user_id' => '1'
        ];
    }
}
