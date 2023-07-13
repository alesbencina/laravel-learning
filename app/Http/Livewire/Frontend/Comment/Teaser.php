<?php

namespace App\Http\Livewire\Frontend\Comment;

use App\Models\Comment;
use Livewire\Component;

class Teaser extends Component
{

  public Comment $comment;

  public function mount(Comment $comment) {
    $this->comment = $comment;
  }

    public function render()
    {
        return view('livewire.frontend.comment.teaser');
    }
}
