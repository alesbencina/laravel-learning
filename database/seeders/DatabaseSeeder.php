<?php

namespace Database\Seeders;

use App\Models\BlogPosts;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * To run the seeder you have to run
     *
     * @command php artisan migrate:fresh --seed
     */
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::factory()->create([
            'name' => 'Test author',
        ]);

        // Assign few job posts to the specific user id.
        $blogPosts = BlogPosts::factory(3)->create([
            'author_id' => $user->id,
        ]);

        // To each blog post add 3 comments.
        foreach ($blogPosts as $blogPost) {
            Comment::factory(3)->create([
                'blog_posts_id' => $blogPost->id,
            ]);
        }

        // Create 5 random blog posts and diffrent users, tags.
        BlogPosts::factory(5)->create();

      $this->call([
        RolesPermissionSeeder::class,
      ]);
    }
}
