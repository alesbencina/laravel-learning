<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ImageUploadController;
use App\Http\Controllers\Admin\TagController;
use App\Livewire\Admin\Blog\Dashboard;
use App\Livewire\Admin\Tag\TagOverview;
use App\Livewire\Frontend\Blog\Detail;
use App\Livewire\Frontend\Comment\Form as CommentForm;
use App\Livewire\Frontend\Landing;
use App\Livewire\Register\Form;
use App\Livewire\Sessions\Login;
use App\Livewire\UsersOverview;
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
Route::get('/blog/{url_alias}', Detail::class)->name("Blog post detail page");

Route::get('tag/{tag:url_alias}', \App\Livewire\Frontend\Tags\Detail::class );

Route::get('/authors/{author:username}', function (User $author) {
  return view('author-detail-page', [
    'posts' => $author->blogPosts,
    'author' => $author,
  ]);
});

// Explicitly leave the normal controller instead of livewire for documentation.
// Auth controllers.
Route::middleware(['guest'])->group(function () {
  Route::get('/register', Form::class);
  Route::get('/login', Login::class)->name('login');
});

Route::middleware(['auth'])->group(function () {
  Route::post('/logout', [Login::class, 'destroy']);
  Route::post('/blog/comment/delete/{comment:id}', [
    CommentForm::class,
    'destroy',
  ]);

});

// Administrator pages.
Route::middleware(['auth', 'role:admin|super-admin','ensure_feature_enabled:blog'])->group(function () {
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

    Route::get('/tags-overview', [
      TagOverview::class,
      'render',
    ])->name("tags_overview");

    Route::get('/tag/edit/{tag:id}', [
      TagController::class,
      'form',
    ])->name("tags_edit");

    Route::get('/tag/add', [
      TagController::class,
      'form',
    ])->name("tag_create");

    Route::get('/tag/delete/{tag:id}', [
      TagController::class,
      'destroy',
    ])->name("tag_delete");

  });

  Route::post('/file/upload', [ImageUploadController::class, 'storeImage'])
    ->name('file.upload');
});



