<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;

class BlogController extends Controller {

  public function index(BlogPosts $blogPosts) {
    return view('admin.blog.edit', [
      'post' => $blogPosts,
    ]);
  }

  public function create() {
    return view('admin.blog.create');
  }

  public function delete(BlogPosts $blogPosts) {
    $blogPosts->delete();

    return redirect()->to('/dashboard')->with('success', "Blog post $blogPosts->title deleted.");
  }

}
