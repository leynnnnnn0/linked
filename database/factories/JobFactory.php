<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'user_id' => $this->faker->numberBetween(1, 11),
            'company_name' => $this->faker->company(),
            'job_description' => $this->faker->text(),
            'salary' => $this->faker->numberBetween(1000, 10000),
        ];
    }
}
