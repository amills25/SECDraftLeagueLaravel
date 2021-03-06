<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AthleteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'active' => false,
            'name' => '',
            'team' => ''
        ];
    }
}
