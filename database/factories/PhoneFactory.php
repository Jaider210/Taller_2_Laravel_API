<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    public function definition(): array
    {
        return [
            'phone_brand' => $this->faker->company,
            'phone_model' => $this->faker->word,
            'phone_price' => $this->faker->randomFloat(2, 100, 1500),
            'phone_display_size' => $this->faker->numberBetween(4, 7),
            'phone_is_smartphone' => $this->faker->boolean(90),
        ];
    }
}
