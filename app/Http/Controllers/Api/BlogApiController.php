<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class BlogApiController extends Controller {

  public function getBlogPostByAlias($url_alias) {
    // Attempt to retrieve the post from cache
    $post = Cache::tags(['blog_posts', "blog_post_{$url_alias}"])
      ->rememberForever("blog_post_{$url_alias}", function () use ($url_alias) {
        return BlogPosts::with(['tag.files','author','files'])->where('url_alias', $url_alias)
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

}
