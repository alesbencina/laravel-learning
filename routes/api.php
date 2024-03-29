<?php

use App\Http\Controllers\Api\BlogApiController;
use App\Http\Controllers\Api\TagApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->group(function () {
  Route::get('/blog/{url_alias}', [BlogApiController::class, 'getBlogPostByAlias'])->name('api.blog.detail');
  Route::get('/blog-posts', [BlogApiController::class, 'getBlogPosts'])->name('api.blog.posts');
  Route::get('/tag/{url_alias}', [TagApiController::class, 'getTagWithBlogPosts'])->name('api.tag.detail');
});

