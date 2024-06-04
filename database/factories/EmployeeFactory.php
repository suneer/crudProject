<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->name(),
            'last_name' => $this->faker->name(),
            'company_id' =>$this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->biasedNumberBetween($min = 10, $max = 20, $function = 'sqrt'),
           
           
        ];
    }
}
