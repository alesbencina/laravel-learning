<?php

namespace App\Livewire\Frontend\Tags;

use App\Models\Tag;
use Livewire\Component;

class Detail extends Component {

  public $posts = [];

  /**
   * @var \App\Models\Tag
   */
  private Tag $tag;

  public function mount(Tag $tag) {
    $this->posts = $tag->blogposts;
    $this->tag = $tag;
  }

  public function render() {
    return view('livewire.frontend.tags.detail', [
      'posts' => $this->posts,
      'tag' => $this->tag
    ]);
  }

}
