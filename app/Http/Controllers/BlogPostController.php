<?php

namespace App\Http\Controllers;

use App\Events\CommentCreated;
use App\Models\BlogPosts;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller {

  public function show(BlogPosts $blogPosts) {
    return view('blogpost/detail-page', [
      'post' => $blogPosts,
      'comments' => $blogPosts->comments,
    ]);
  }

}
