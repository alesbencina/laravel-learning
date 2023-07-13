<?php

namespace App\Http\Livewire\Frontend\Comment;

use App\Models\Comment;
use Livewire\Component;

class Delete extends Component {

  public Comment $comment;

  public function render() {
    return view('livewire.frontend.comment.delete');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy() {
    $this->comment->delete();
    $this->emit('refresh');
  }

}
