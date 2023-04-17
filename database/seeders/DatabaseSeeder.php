<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\BlogPosts;
use App\Models\Tag;

class DatabaseSeeder extends Seeder {

  /**
   * Seed the application's database.
   */
  public function run(): void {
    $user = User::factory()->create();

    $tag1 = Tag::create([
      'name' => 'Healthcare',
      'url_alias' => 'healthcare',
    ]);

    $tag2 = Tag::create([
      'name' => 'Construction',
      'url_alias' => 'construction',
    ]);

    $tag3 = Tag::create([
      'name' => 'Transport',
      'url_alias' => 'transport',
    ]);

    $tag4 = Tag::create([
      'name' => 'IT',
      'url_alias' => 'it',
    ]);

    BlogPosts::create([
      'title' => 'My blog post',
      'description' => '<b>Description</b>',
      'url_alias' => 'my-blog-post',
      'author_id' => $user->id,
      'tag_id' => $tag1->id,
    ]);

    BlogPosts::create([
      'title' => 'My blog post 2',
      'description' => '<b>Description</b>',
      'url_alias' => 'my-blog-post-1',
      'author_id' => $user->id,
      'tag_id' => $tag1->id,
    ]);

    BlogPosts::create([
      'title' => 'My blog post 3',
      'description' => '<b>Description</b>',
      'url_alias' => 'my-blog-post-2',
      'author_id' => $user->id,
      'tag_id' => $tag2->id,
    ]);

    BlogPosts::create([
      'title' => 'My blog post 3',
      'description' => '<b>Description</b>',
      'url_alias' => 'my-blog-post-3',
      'author_id' => $user->id,
      'tag_id' => $tag3->id,
    ]);

    BlogPosts::create([
      'title' => 'My blog post 4',
      'description' => '<b>Description</b>',
      'url_alias' => 'my-blog-post-4',
      'author_id' => $user->id,
      'tag_id' => $tag4->id,
    ]);

  }

}
