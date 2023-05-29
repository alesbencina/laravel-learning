<?php

namespace App\Http\Controllers;

use App\Models\BlogPosts;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function show(BlogPosts $blogPosts)
    {
        return view('blogpost/detail-page', [
            'post' => $blogPosts,
            'comments' => $blogPosts->comments,
        ]
        );
    }

    public function createComment(BlogPosts $blogPosts)
    {
        $attributes = request()->validate([
            'body' => 'required|min:10',
        ]);

        $comment = Comment::create([
            'body' => $attributes['body'],
            'user_id' => Auth::id(),
            'blog_posts_id' => $blogPosts->id,
        ]);

        return redirect("/blog-posts/$blogPosts->url_alias")->with('success', "Comment successfully added ($comment->id).");

    }

    public function deleteComment(Comment $comment)
    {
        $comment->delete();

        return back()->with('success', "Comment deleted ($comment->id).");
    }
}
