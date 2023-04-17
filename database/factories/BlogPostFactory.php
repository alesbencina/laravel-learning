<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BlogPostFactory extends Factory {

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
      'author_id' => UserFactory::factory(),
      'tag_id' => TagsFactory::factory(),
    ];
  }


}
