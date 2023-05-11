<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\BlogPosts;
use App\Models\Tag;

class DatabaseSeeder extends Seeder {

  /**
   * To run the seeder you have to run
   *
   * @command php artisan migrate:fresh --seed
   *
   */
  /**
   * Seed the application's database.
   */
  public function run(): void {

    $user = User::factory()->create([
      'name' => 'Test author'
    ]);

    // Assign few job posts to the specific user id.
    BlogPosts::factory(3)->create([
      'author_id' => $user->id
    ]);
    // Create 5 random blog posts and diffrent users, tags.
    BlogPosts::factory(5)->create();
  }

}
