<?php

namespace App\Livewire\Frontend\Comment;

use App\Models\BlogPosts;
use Livewire\Component;

class Grid extends Component {

  public $comments;

  protected $listeners = ['refresh' => '$refresh'];

  public function mount($postId) {
    $this->comments = BlogPosts::find($postId)->comments;
  }

  public function render() {
    if (config('features.comments')) {
      return view('livewire.frontend.comment.grid');
    }
    return view('livewire.empty-placeholder');
  }

}
