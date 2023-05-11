<?php

use App\Models\BlogPosts;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::get('blog-posts', function () {
  // Debugging which sql queries are send.
  DB::listen(function ($query) {
    logger($query->sql, $query->bindings);
  });

  // Eager loading.
  // Reduce the numbers of sql queries.
  $posts = BlogPosts::latest('updated_at')->with('tag','author')->get();
  #$posts = BlogPosts::All();
  return view('blog-posts', [
    'posts' => $posts,
  ]);
});

// blog_posts table: column
// similar like firstOfFail
Route::get('blog-posts/{blog_posts:url_alias}', function (BlogPosts $blogPosts) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('blog-detail-page', [
      'post' => $blogPosts,
    ]
  );

});//->where('post', ['A-z_\-+']);
// @todo can add own class?
//->whereAlphaNumeric('post');


Route::get('tag/{tag:url_alias}', function (Tag $tag) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('tag-detail-page', [
    'posts' => $tag->blogposts,
    'tag' => $tag
  ]);

});

Route::get('authors/{author:username}', function (\App\Models\User $author) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('author-detail-page', [
    'posts' => $author->blogPosts,
    'author' => $author
  ]);

});
