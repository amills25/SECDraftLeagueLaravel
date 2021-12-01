<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'content' => json_encode([
                "Back for its 39th year, The Original SEC Draft League! Where history trumps glitz and glamour and gimmicks!!",
                "The draft is complete. Let the games begin. Let's see who can score once the real games begin. Good luck!!!!",
                "Thirty-Nine years!! Wow, this league is getting some age on it. The Glitz and Glamour League has its fans, but the traditional league still has its place and has history. The traditional league is ready to rumble once again!!! Our trophy still has 10 years to go until it is full; who wants to add their name to this historical marker?",
                "We have heard rumors that history has been mentioned in the Glitz and Glamour League. Can you seriously talk about history in a league that is barely five years old? I guess last week is history, too. One final note about history: In 1985-86, a player by the name of Frank Kornet was drafted in the fifth round of our historic league. And now, 29 years later, his son played for and graduated from Vanderbilt. Additional historic note: South Carolina also had a second generation player; BJ McKie's son played for South Carolina. We will continue this league until there are grandchildren!! That, my friends, is history!"
            ])
        ];
    }
}
