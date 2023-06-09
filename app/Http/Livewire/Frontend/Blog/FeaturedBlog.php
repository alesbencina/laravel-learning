<?php

namespace App\Http\Livewire\Frontend\Blog;

use App\Models\BlogPosts;
use Livewire\Component;

class FeaturedBlog extends Component
{
  public BlogPosts $post;

  public function mount() {
    $this->post = BlogPosts::with('tag')->first();
  }

    public function render()
    {
        return view('livewire.frontend.blog.featured-blog');
    }
}
