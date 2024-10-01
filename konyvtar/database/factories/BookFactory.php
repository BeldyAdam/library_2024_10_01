<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'author' => fake('hu_HU')->name(),
<<<<<<< HEAD
            'title' => fake('hu_HU')->sentence(),
=======
            'title' => fake('hu_HU')->sentence()
>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
        ];
    }
}
