<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OfertasFormacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'empresa' => $this->faker->company(),
            'posto' => $this->faker->jobTitle(),
            'data_inicio' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'data_fin' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'num_prazas' => $this->faker->regexify('[0-9]{2}'),
        ];
    }
}
