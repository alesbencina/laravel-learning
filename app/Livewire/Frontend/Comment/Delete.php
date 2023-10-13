<?php

namespace App\Livewire\Frontend\Comment;

use App\Models\Comment;
use Livewire\Component;

class Delete extends Component {

  public Comment $comment;

  public function render() {
    if (config('features.comments')) {
      return view('livewire.frontend.comment.delete');
    }
    return view('livewire.empty-placeholder');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy() {
    $this->comment->delete();
    $this->dispatch('refresh');
  }

}
