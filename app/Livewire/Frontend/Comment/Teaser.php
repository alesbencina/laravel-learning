<?php

namespace App\Livewire\Frontend\Comment;

use App\Models\Comment;
use Livewire\Component;

class Teaser extends Component {

  public Comment $comment;

  public function mount(Comment $comment) {
    $this->comment = $comment;
  }

  public function render() {
    if (config('features.comments')) {
      return view('livewire.frontend.comment.teaser');
    }
    return view('livewire.empty-placeholder');
  }

}
