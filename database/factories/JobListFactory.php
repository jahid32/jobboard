<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Enmus\EmploymentType;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobList>
 */
class JobListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->realText('200'),
            'company_name' => fake()->compan(),
            'employment_type' => fake()->rendomElement(EmploymentType::cases())->value,
            'role' => fake()->jobTitle(),
            'company_logo' => fake()->imageUrl(150, 150),
            'apply_url' => fake()->url(),
            'description' => fake()->realText(600),
            'salary' => Number::currency(fake()->numberBetween(500, 20000)) . ' - ' . Number::currency(fake()->numberBetween(500, 20000))

        ];
    }
}
