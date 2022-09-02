<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->name(),
            'description' => $this->faker->name(),
            'image' => $this->faker->name(),
            'price' => '100',
            'unit' => 'kg',
            'items_per_unit' => '10',
            'weight' => '10',
        ];
    }
}
