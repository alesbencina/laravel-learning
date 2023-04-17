<?php

namespace Database\Factories;

use App\Models\BlogPosts;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BlogPostsFactory extends Factory {

  protected $model = BlogPosts::class;

  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition(): array {
    return [
      'title' => fake()->title,
      'description' => fake()->sentence,
      'url_alias' => fake()->url,
      'author_id' => \Database\Factories\UserFactory::factory(),
      'tag_id' => TagsFactory::factory(),
    ];
  }


}
