<?php

use App\Models\BlogPosts;
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

Route::get('/blog-posts', function () {
  $posts = BlogPosts::All();

  return view('blog-posts', [
    'posts' => $posts,
  ]);
});

Route::get('/blog-posts/{slug}', function (string $slug) {
  $post = BlogPosts::findBySlugOrFail($slug);
  if ($post) {
    return view('blog-detail-page', [
      'post' => $post,
    ]);
  }

  return redirect('blog-posts');

});//->where('post', ['A-z_\-+']);
  // @todo can add own class?
  //->whereAlphaNumeric('post');
