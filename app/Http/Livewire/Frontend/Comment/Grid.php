<?php

namespace App\Http\Livewire\Frontend\Comment;

use App\Models\BlogPosts;
use Livewire\Component;

class Grid extends Component {

  public $comments;

  protected $listeners = ['refresh' => '$refresh'];

  public function mount($postId) {
    $this->comments = BlogPosts::find($postId)->comments;
  }

  public function render() {
    return view('livewire.frontend.comment.grid');
  }

}
