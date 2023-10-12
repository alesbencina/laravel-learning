<?php

namespace App\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Grid extends Component {

  public Collection $posts;

  public function mount(bool $all = TRUE, $posts = []) {
    if ($all) {
      $this->posts = BlogPosts::where("status", 1)->get();
    } else {
      // In order if we're passing blogs to the component.
      $this->posts = $posts;
    }
  }

  public function render() {
    return view('livewire.frontend.blog.grid');
  }

}
