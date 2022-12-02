<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gajih>
 */
class AtletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'atlet_id' => fake()->unique()->randomDigit(),
            'nama_atlet' => fake()->firstName() . " ". fake()->lastName(),
            'negara' => fake()->paragraph(),
        ];
    }
}
