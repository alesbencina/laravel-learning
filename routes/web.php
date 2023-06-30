<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Livewire\Admin\Blog\Dashboard;
use App\Http\Livewire\Frontend\Blog\Detail;
use App\Http\Livewire\Frontend\Landing;
use App\Http\Livewire\UsersOverview;
use App\Models\Tag;
use App\Models\User;
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

Route::get('/', Landing::class)->name('homepage');

Route::get('blog-posts/{blog_posts}', function ($post) {
  $a = 0;
  return [
    Detail::class,
    'render',
  ];
});

Route::post('blog-posts/comment/new/{blog_posts:id}', [
  CommentController::class,
  'store',
]);

Route::post('blog-posts/comment/delete/{comment:id}', [
  CommentController::class,
  'destroy',
]);

Route::get('tag/{tag:url_alias}', function (Tag $tag) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('tag-detail-page', [
    'posts' => $tag->blogposts,
    'tag' => $tag,
  ]);
});

Route::get('authors/{author:username}', function (User $author) {
  //$post = BlogPosts::findBySlugOrFail($slug);
  return view('author-detail-page', [
    'posts' => $author->blogPosts,
    'author' => $author,
  ]);
});

// Auth.
Route::get('register', [RegisterController::class, 'create'])
  ->middleware('guest');
Route::get('login', [SessionController::class, 'create'])
  ->middleware('guest')
  ->name('login');
Route::post('login', [SessionController::class, 'login'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])
  ->middleware('auth');

// Administrator pages.
Route::middleware(['auth', 'role:admin|super-admin'])->group(function () {
  Route::get('/dashboard', [
    Dashboard::class,
    'render',
  ])->name('admin_dashboard');

  Route::prefix('admin')->group(function () {
    Route::get('/users', [
      UsersOverview::class,
      'render',
    ])->name('admin_users');

    Route::get('/edit-blog/{blog_posts:id}', [
      BlogController::class,
      'index',
    ])->name('Edit blog post');

    Route::get('/create-blog', [
      BlogController::class,
      'create',
    ])->name('Create blog post');

    Route::get('/delete-blog/{blog_posts:id}', [
      BlogController::class,
      'delete',
    ])->name('Delete blog post');

  });

  Route::post('file/upload', [ImageUploadController::class, 'storeImage'])
    ->name('file.upload');
});



