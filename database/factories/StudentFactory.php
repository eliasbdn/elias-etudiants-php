<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName() ,
            'surname' => $this->faker->lastName(),
            'adress' => $this->faker->address(),
            'email' => $this->faker->email(),
            'slug' => $this->faker->slug(),
        ];
    }
}
