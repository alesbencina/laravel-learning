<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

/**
 * Creates a create blog form component and storing the new blog post.
 */
class Create extends BlogBaseComponent {

  /**
   * @inheritDoc
   */
  protected function rules(): array {
    return parent::rules() + [
        'url_alias' => 'required|unique:blog_posts,url_alias',
      ];
  }

  /**
   * @inheritDoc
   */
  public function render(): View {
    return view('livewire.admin.blog.create');
  }

  /**
   * Store the newly created blog post.
   */
  public function store($request): RedirectResponse {
    $validatedData = $this->validate();
    $validatedData['author_id'] = auth()->id();

    BlogPosts::create($validatedData);
    return redirect()->to('/dashboard');
  }

}
