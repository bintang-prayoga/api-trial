<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'postId' => mt_rand(1, 10),
            'userId' => mt_rand(1, 3),
            'content' => collect(fake()->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode('')
        ];
    }
}
