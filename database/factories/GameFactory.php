<?php

namespace Database\Factories;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word,
            'platform' => fake()->word,
            'release_year' => Carbon::create(fake()->dateTimeThisDecade())->year,
            'genre' => fake()->word,
            'publisher' => fake()->word,
            'rank' => fake()->randomNumber(),
            'na_sales' => fake()->randomNumber(),
            'eu_sales' => fake()->randomNumber(),
            'jp_sales' => fake()->randomNumber(),
            'other_sales' => fake()->randomNumber(),
            'global_sales' => fake()->randomNumber(),
        ];
    }
}
