<?php

namespace App\Livewire\Frontend\Comment;

use App\Events\CommentCreated;
use App\Models\BlogPosts;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Form extends Component {

  public BlogPosts $post;

  public string $body;

  protected array $rules = [
    'body' => 'required|min:10',
  ];

  public function mount(BlogPosts $post) {

    $this->post = $post;
  }

  public function render() {
    if (config('features.comments')) {
      return view('livewire.frontend.comment.form');
    }
    return view('livewire.empty-placeholder');
  }

  public function create() {
    $validatedData = $this->validate();
    $validatedData['user_id'] = Auth::id();
    $validatedData['blog_posts_id'] = $this->post->id;
    $comment = Comment::create($validatedData);

    CommentCreated::dispatch($this->post, $comment);

    // Emit the event to notify the parent component (blog post detail page)
    $this->dispatch('refresh', $comment);

    // Clear the comment input field
    $this->body = '';
  }

}
