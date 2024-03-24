<?php

namespace Database\Factories;

use App\Models\ProductDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductDetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductDetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 500), // Generate a random price between 10 and 500
            'tags' => $this->faker->words(3, true), // Generate 3 random words as tags
            'category' => $this->faker->randomElement(['Laptops', 'Accessories', 'Computers', 'Monitors']), // Randomly select a category
            'image' => $this->faker->imageUrl(), // Generate a fake image URL
            'quantity' => $this->faker->numberBetween(1, 100), // Generate a random quantity between 1 and 100
            'rating' => $this->faker->optional()->randomFloat(2, 1, 5), // Generate a random rating between 1 and 5 (optional)
        ];
    }
}
