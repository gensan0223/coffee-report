<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        $fiveMultipleValidator = function($digit) {
            return $digit % 5 === 0;
        };
        return [
            'user_id' => User::factory(),
            'text' => fake()->realText(50),
            'range1' => fake()->valid($fiveMultipleValidator)->numberBetween(0, 100),
            'range2' => fake()->valid($fiveMultipleValidator)->numberBetween(0, 100),
            'range3' => fake()->valid($fiveMultipleValidator)->numberBetween(0, 100),
            'range4' => fake()->valid($fiveMultipleValidator)->numberBetween(0, 100),
            'favorite_count' => fake()->numberBetween(0, 100),
            'flavor' => fake()->word(),
        ];
    }
}
