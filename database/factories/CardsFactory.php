<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CardsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'list_id' => $this->faker->numberBetween(11, 40),
            'name' => 'card',
            'priority' => $this->faker->randomElement(['IMPORTANT' ,'LESS_IMPORTANT']),
            'status' => $this->faker->randomElement(['NEW' ,'IN_PROCESS', 'COMPLETED'])
        ];
    }
}
