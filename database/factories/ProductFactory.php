<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->domainWord();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'price' => fake()->unique()->biasedNumberBetween(100, 999),
            'color' => fake()->safeColorName().", ".fake()->safeColorName().", ".fake()->safeColorName().", ".fake()->safeColorName(),
            'materials' => fake()->domainWord().", ".fake()->domainWord().", ".fake()->domainWord().", ".fake()->domainWord(),
            'brand' => fake()->domainWord(),
            'short_description' => fake()->text(100),
            'description' => fake()->text(100)." ".fake()->text(100),
            'image' => fake()->imageUrl(276, 357, 'Product', true),
            'desc_image' => fake()->imageUrl(276, 357, 'Product', true).", ".fake()->imageUrl(276, 357, 'Product', true).", ".fake()->imageUrl(276, 357, 'Product', true).", ".fake()->imageUrl(276, 357, 'Product', true),
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
