<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    
    {
        return [

            'title' => fake()->word(),
            "lyrics" => fake()->paragraph(3, true),
            "thumb" => fake()->imageUrl(640, 480, 'animals', true),
            "artist" => fake()->name(),
            "exit_date" => fake()->date(),
            'published' => fake() -> numberBetween(0, 1),
            'price' => fake() -> randomFloat(2, 1, 50),
            "song_duration" => fake() -> randomDigit()
        ];

    }
}
