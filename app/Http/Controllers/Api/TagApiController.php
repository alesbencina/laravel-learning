<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class TagApiController extends Controller {

  public function getTagWithBlogPosts(string $url_alias) {
    $post = Cache::tags(["tag_{$url_alias}"])
      ->rememberForever("tag_{$url_alias}", function () use ($url_alias) {
        return Tag::with(['files', 'blogposts.files', 'blogposts.tag'])
          ->where('url_alias', $url_alias)
          ->first();
      });

    if ($post) {
      return response()->json($post);
    }

    return response()->json(['message' => 'Tag not found or not published'], Response::HTTP_NOT_FOUND);
  }

}
