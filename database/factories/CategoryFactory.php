<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $name = 'category-' . self::$counter++;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'parent_id' => '0',
            'image' => fake()->image(),
            'status' => rand(0,1),
            'user_id' => '1'
        ];
    }
}
