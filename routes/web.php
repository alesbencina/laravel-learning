<?php

use App\Models\BlogPosts;
use App\Models\Tag;
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
  $posts = BlogPosts::All();

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
  ]);

});
