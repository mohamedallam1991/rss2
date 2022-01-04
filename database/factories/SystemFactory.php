<?php

namespace Database\Factories;

use App\Models\Structure;
use Illuminate\Database\Eloquent\Factories\Factory;

class SystemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'structure_id' => Structure::factory()->create()->id,
            'name' => $this->faker->name(),
            'description' => $this->faker->paragraph(4),
            'status' => $this->faker->randomElement(['working', 'infected']),
            'observation' => $this->faker->sentence(),
            'children' => $this->faker->boolean(),
        ];
    }
}
