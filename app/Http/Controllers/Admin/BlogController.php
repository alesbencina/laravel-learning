<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPosts;

class BlogController extends Controller
{
    public function index(BlogPosts $blogPosts)
    {
        return view('admin.blog.edit', [
            'post' => $blogPosts,
        ]);
    }
}
