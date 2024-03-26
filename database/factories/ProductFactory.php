<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 500), // Adjust the range based on your needs
            'tags' => $this->faker->words(3, true), // Generates three words as tags
            'images' => $this->faker->imageUrl(), // Generates a random image URL
            'category' => $this->faker->randomElement(['laptop', 'PC', 'accessory']),
            //
        ];
    }
}
