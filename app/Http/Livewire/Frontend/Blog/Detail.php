<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Livewire\Component;

class Detail extends Component {

  public BlogPosts $post;

  protected $listeners = ['refresh' => '$refresh'];

  public function mount(string $url_alias) {
    $this->post = BlogPosts::where("url_alias", $url_alias)->first();
  }

  public function render() {
    return view('livewire.frontend.blog.detail');
  }

}
