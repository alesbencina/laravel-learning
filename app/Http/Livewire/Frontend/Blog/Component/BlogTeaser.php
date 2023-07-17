<?php

namespace App\Http\Livewire\Frontend\Blog\Component;

use App\Models\BlogPosts;
use Livewire\Component;

class BlogTeaser extends Component {

  /**
   * The blog post.
   */
  public BlogPosts $post;

  /**
   * The default class for teaser wrapper.
   */
  public string $class = 'col-span-2';

  /**
   * The loop iteration.
   */
  public int $loopIteration;

  public function mount() {
    if ($this->loopIteration < 3) {
      $this->class = 'col-span-3';
    }
  }

  public function render() {
    return view('livewire.frontend.blog.component.blog-teaser');
  }

}
