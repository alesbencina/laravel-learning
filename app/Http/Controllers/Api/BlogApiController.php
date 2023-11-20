<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogApiController extends Controller
{
  public function getBlogPostByAlias($url_alias)
  {
    $post = BlogPosts::where('url_alias', $url_alias)->first();

    // Check if the post exists and is published
    if (!$post || ($post->status == 0 && auth()->guest())) {
      return response()->json(['message' => 'Post not found or not published'], Response::HTTP_NOT_FOUND);
    }

    return response()->json($post);
  }
}
