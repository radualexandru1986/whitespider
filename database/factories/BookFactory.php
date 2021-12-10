<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'title' => $this->faker->name(),
            'genre' => $this->genre(),
            'author'=>$this->faker->name(),
            'available'=>rand(0,1),
        ];
    }

    /**
     * Returns a random genre from the array
     *
     * @return string
     */
    private function genre()
    {
        $genre = ['fiction', 'novel', 'mystery', 'memoir', 'poetry', 'review'];
        $random = rand(0 ,5);
        return $genre[$random];
    }
}
