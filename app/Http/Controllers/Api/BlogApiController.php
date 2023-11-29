<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class BlogApiController extends Controller {

  public function getBlogPostByAlias(string $url_alias) {
    $post = Cache::tags(['blog_posts', "blog_post_{$url_alias}"])
      ->rememberForever("blog_post_{$url_alias}", function () use ($url_alias) {
        return BlogPosts::with(['tag.files', 'author', 'files'])
          ->where('url_alias', $url_alias)
          ->where('status', TRUE)
          ->first();
      });

    if ($post) {
      return response()->json($post);
    }

    if (!$post || ($post->status == 0 && auth()->guest())) {
      return response()->json(['message' => 'Post not found or not published'], Response::HTTP_NOT_FOUND);
    }
  }

  public function getBlogPosts(int $offset = 0, int $limit = 10, string $order = "DESC") {
    $posts = Cache::tags(['blog_posts'])
      ->rememberForever("blog_posts", function () use ($offset, $limit, $order) {
        return BlogPosts::with(['tag.files', 'author', 'files'])
          ->where('status', TRUE)
          ->orderBy('updated_at', $order)
          ->offset($offset)
          ->limit($limit)
          ->get();
      });

    if ($posts) {
      return response()->json($posts);
    }
    return response()->json(['message' => 'No job posts published']);
  }

}
