<?php

namespace App\Livewire\Frontend\Tags;

use App\Models\Tag;
use Livewire\Component;

class Detail extends Component {

  public $posts = [];

  public function mount(Tag $tag) {
    $this->posts = $tag->blogposts;
  }

  public function render() {
    return view('livewire.frontend.tags.detail', [
      'posts' => $this->posts
    ]);
  }

}
