<?php

namespace Database\Factories;

use App\Enums\BicycleApprovedEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bicycle>
 */
class BicycleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(10000, 1000000),
            'approved' => $this->faker->randomElement(BicycleApprovedEnum::values())
        ];
    }
}
