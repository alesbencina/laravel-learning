<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Detail extends Component {

  public BlogPosts $post;

  public function mount(string $url_alias) {
    $this->post = BlogPosts::where("url_alias", $url_alias)->first();
  }

  public function render() {
    return view('livewire.frontend.blog.detail');
  }

}
