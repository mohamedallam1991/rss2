<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StructureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'unit' => $this->faker->company(),
            'division' => $this->faker->city(),
            'facade' => $this->faker->companySuffix(),
        ];
    }
}
