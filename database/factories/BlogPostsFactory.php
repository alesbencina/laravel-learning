<?php

namespace Database\Factories;

use App\Models\BlogPosts;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BlogPostsFactory extends Factory
{
    protected $model = BlogPosts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'description' => fake()->paragraph,
            'url_alias' => fake()->slug,
            'author_id' => User::factory(),
            'tag_id' => Tag::factory(),
        ];
    }
}
