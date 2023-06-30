<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller {

  /**
   * Return the blog edit page for administrator.
   *
   * @param \App\Models\BlogPosts $blogPosts
   *   The current blog post.
   *
   * @return \Illuminate\View\View
   *   Returns the blog edit page.
   */
  public function index(BlogPosts $blogPosts): View {
    return view('admin.blog.edit', [
      'post' => $blogPosts,
    ]);
  }

  /**
   * Returns the create blog view.
   *
   * @return \Illuminate\View\View
   *   Returns the create blog from view.
   */
  public function create(): View {
    return view('admin.blog.create');
  }

  /**
   * Delete the specified blog post.
   *
   * @param \App\Models\BlogPosts $blogPosts
   *   The current blog post.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Return redirect user to dashboard with a flash message.
   */
  public function delete(BlogPosts $blogPosts): RedirectResponse {
    $blogPosts->delete();

    return redirect()->to('/dashboard')->with('success', "Blog post $blogPosts->title deleted.");
  }

}
