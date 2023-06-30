<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Livewire\Component;

class Grid extends Component {

  public $posts;


  public function mount() {
    $this->posts = BlogPosts::getAll();
  }

  public function render() {
    return view('livewire.frontend.blog.grid');
  }

}
