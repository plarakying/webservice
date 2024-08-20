<?php

namespace Database\Factories;

use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firstname' => $this->faker->FirstName,
            'lastname'  => $this->faker->LastName,
            'email' => $this->faker->email,
            // 'province' => $this->faker->province,
            'province_id' => Province::InRandomOrder()->first()->id,
            'created_at' => now(),
        ];
    }
}
