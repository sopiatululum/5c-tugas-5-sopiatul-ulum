<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gajih>
 */
class SektorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kode_sektor' => fake()->unique()->randomDigit(),
            'nama_sektor' => fake()->firstName() . " ". fake()->lastName(),
        ];
    }
}
