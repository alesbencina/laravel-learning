<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Illuminate\View\View;
use Livewire\Component;

/**
 * Creates a blog dashboard components.
 */
class Dashboard extends Component {

  /**
   * @param $id
   *   The id of the component.
   * @param int $itemsPerPage
   *   The default items per page.
   */
  public function __construct($id = NULL, public int $itemsPerPage = 10) {
    parent::__construct($id);
  }

  /**
   * Render the blog posts table.
   *
   * @return \Illuminate\View\View
   *   Returns the blog posts dashboard view.
   */
  public function render(): View {
    $a = 0;
    return view('livewire.admin.blog.dashboard', [
      'blogPosts' => BlogPosts::with('author')
        ->paginate($this->itemsPerPage),
    ]);
  }

}
