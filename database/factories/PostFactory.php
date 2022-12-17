<?php

namespace Database\Factories;

use App\Enums\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentences(3, true),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->paragraphs(4, true),
            'image' => 'farcry6.jpg',
            'rating' => $this->faker->randomFloat(null, 0, 10),
            'category' => $this->faker->randomElement(array_column(Category::cases(), 'value'))
        ];
    }
}
