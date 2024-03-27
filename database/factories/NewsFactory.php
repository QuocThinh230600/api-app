<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->paragraph(2),
            'top_content' => fake()->paragraph(2),
            'content' => fake()->paragraph(10),
            'bottom_content' => fake()->paragraph(2),
            'image' => fake()->image(),
            'user_id' => '1',
            'category_id' => fake()->numberBetween(5, 10),
            'status' => 'on'
        ];
    }
}
