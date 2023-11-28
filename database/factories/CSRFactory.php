<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CSR;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CSR>
 */
class CSRFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'headline' => fake()->sentence(),
            'headline_img' => fake()->word(),
            'content' => fake()->paragraph(10),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
