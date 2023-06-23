<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Lot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Lot>
 */
class LotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(20),
            'description' => $this->faker->text(),
            'category_id' => Category::get()->random()->id
        ];
    }
}
