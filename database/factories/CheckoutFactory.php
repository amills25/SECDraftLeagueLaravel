<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Book;

class CheckoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'checked_out' => $this->faker->dateTime($max = '-1 month', $timezone = null),
            'checked_in' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now', $timezone = null)
        ];
    }
}
