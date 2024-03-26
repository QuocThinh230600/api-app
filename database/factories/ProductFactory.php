<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    private static $counter = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = 'product-' . self::$counter++;

        return [
            'name' => $name,
            'top_content' => fake()->paragraph(10),
            'description' => fake()->paragraph(20),
            'value' => fake()->numberBetween(1, 5),
            'shrot_description' => fake()->paragraph(10),
            'image' => fake()->image(),
            'user_id' => rand(1, 50),
            'category_id' => rand(1, 4),
            'status' => 'on',
        ];
    }
}
