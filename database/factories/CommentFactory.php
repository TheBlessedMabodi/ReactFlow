<?php

namespace Database\Factories;
use App\Models\Comment;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'post_id' => $this->faker->numberBetween(1, 10), // Assuming posts exist with IDs 1 to 10
                'author_name' => $this->faker->name,
                'author_email' => $this->faker->email,
                'content' => $this->faker->paragraph,
            ];
    }
}
