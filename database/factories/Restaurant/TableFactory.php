<?php

namespace Database\Factories\Restaurant;

use App\Models\Restaurant\Table;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant\Table>
 */
class TableFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Table::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'chairs' => fake()->numberBetween(1, 20),
            'occupied' => fake()->boolean(),
            'description' => fake()->text(255),
        ];
    }
}
