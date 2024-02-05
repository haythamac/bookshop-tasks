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
            'title' => $this->faker->realText(10),
            'cover' => $this->faker->text(20),
            'price' => rand(500, 10000),
            'authors' => $this->faker->name(),
            'genre' => $this->faker->word(2),
        ];
    }
}
