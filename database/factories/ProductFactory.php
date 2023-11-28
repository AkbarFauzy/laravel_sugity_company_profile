<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'id' => Product::factory(),
            'name' => fake()->text(),
            'description' => fake()->paragraph(10),
            'img' => fake()->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
