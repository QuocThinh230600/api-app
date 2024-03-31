<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gallery>
 */
class GalleryFactory extends Factory
{
    private static $counter = 1;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $number = self::$counter++;

        return [
            'name' => fake()->name(),
            'photo' => fake()->image(),
            'description' => fake()->paragraph(3),
            'size' => '100x100',
            'status' => rand(0, 1),
            'user_id' => '1',
        ];
    }
}
