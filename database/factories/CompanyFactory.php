<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'website_url' => fake()->optional()->url(),
            'notes' => fake()->optional(0.3)->sentence(),
            'city' => fake()->optional(0.75)->city(),
            'user_id' => User::factory(),
        ];
    }
}
