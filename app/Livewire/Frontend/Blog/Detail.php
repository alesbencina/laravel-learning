<?php

namespace App\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Livewire\Component;

class Detail extends Component {

  public BlogPosts $post;

  public function mount(string $url_alias) {
    $this->post = BlogPosts::where("url_alias", $url_alias)->first();
    // Redirect to homepage if the blog is unpublished.
    if (!$this->post->status
      && auth()->guest()
    ) {
      $this->redirect('/');
    }
  }

  public function render() {
    return view('livewire.frontend.blog.detail');
  }

}
