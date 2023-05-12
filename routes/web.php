<?php

use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\BlogPosts;
use App\Models\Tag;
use App\Models\User;
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
  return redirect()->route('home');
});

Route::get('blog-posts', function () {
  // Debugging which sql queries are send.
  DB::listen(function ($query) {
    logger($query->sql, $query->bindings);
  });
  $posts = BlogPosts::latest('updated_at')->with('tag', 'author')->get();
  return view('blog-posts', [
    'posts' => $posts,
    'authors' => User::all(),
    'tags' => Tag::all(),
  ]);
})->name('home');

Route::get('blog-posts/{blog_posts:url_alias}', [
  BlogPostController::class,
  'show',
]);

Route::post('blog-posts/comment/new/{blog_posts:id}', [
  BlogPostController::class,
  'createComment',
]);


Route::post('blog-posts/comment/delete/{comment:id}', [
  BlogPostController::class,
  'deleteComment',
]);
/*function (BlogPosts $blogPosts) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('blog-detail-page', [
      'post' => $blogPosts,
    ]
  );
});//->where('post', ['A-z_\-+']);
*/
// @todo can add own class?
//->whereAlphaNumeric('post');


Route::get('tag/{tag:url_alias}', function (Tag $tag) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('tag-detail-page', [
    'posts' => $tag->blogposts,
    'tag' => $tag,
  ]);
});

Route::get('authors/{author:username}', function (\App\Models\User $author) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('author-detail-page', [
    'posts' => $author->blogPosts,
    'author' => $author,
  ]);
});

Route::get('register', [RegisterController::class, 'create'])
  ->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])
  ->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'login'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])
  ->middleware('auth');
