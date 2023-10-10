<?php

namespace Database\Factories;

use App\Models\Product;
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

    protected $model = Product::class;

    public function definition(): array
    {

        $names = ['Pencil', 'Notebook', 'Eraser', 'Ruler', 'Pen', 'Marker', 'Highlighter', 'Stapler', 'Scissors'];

        return [
            'name' => $this->faker->randomElement($names),
            'price' => $this->faker->randomFloat(2, 10, 1000),
        ];
    }
}
