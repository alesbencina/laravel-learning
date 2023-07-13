<?php

namespace App\Http\Livewire\Frontend\Comment;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Grid extends Component {

  public Collection $comments;

  public function mount(Collection$comments) {
    $this->comments = $comments;
  }

  public function render() {
    return view('livewire.frontend.comment.grid');
  }

}
