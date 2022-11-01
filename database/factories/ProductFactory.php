<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
    public function definition()
    {
        $name = $this->faker->sentence(2);
        return [
            'category_id' => Category::select('id')->get()->random()->id,
            'name' => $name,
            'slug' => Str::slug($name),
            'product_code' => $this->faker->numberBetween(100, 1000),
            'product_price' => $this->faker->numberBetween(100, 1000),
            'product_stock' => $this->faker->numberBetween(5, 100),
            'alert_quantity' => $this->faker->numberBetween(1, 10),
            'short_description' => $this->faker->paragraph(3),
            'long_description' => $this->faker->paragraph(6),
            'additional_info' => $this->faker->paragraph(2),
            'product_image' => "default-product.jpg",
            'product_rating' => $this->faker->numberBetween(0, 5),

        ];
    }
}
