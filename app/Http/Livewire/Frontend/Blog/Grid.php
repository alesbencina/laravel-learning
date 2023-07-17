<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Grid extends Component {

  public Collection $posts;

  public function mount() {
    $this->posts = BlogPosts::all();
  }

  public function render() {
    return view('livewire.frontend.blog.grid');
  }

}
