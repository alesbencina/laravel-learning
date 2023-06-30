<?php

namespace App\Http\Controllers;

use App\Events\CommentCreated;
use App\Models\BlogPosts;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Provides CommentController.
 */
class CommentController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, BlogPosts $blogPosts)
    {
      $attributes = request()->validate([
        'body' => 'required|min:10',
      ]);

      $comment = Comment::create([
        'body' => $attributes['body'],
        'user_id' => Auth::id(),
        'blog_posts_id' => $blogPosts->id,
      ]);

      CommentCreated::dispatch($blogPosts, $comment);
      //event(new CommentCreated($blogPosts, $comment));

      return redirect("/blog-posts/$blogPosts->url_alias")->with('success', "Comment successfully added ($comment->id).");
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
      $comment->delete();

      return back()->with('success', "Comment deleted ($comment->id).");
    }
}
