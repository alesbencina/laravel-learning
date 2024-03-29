<?php

namespace App\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Illuminate\Support\Facades\Cache;
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
  public function store() {
    $validatedData = $this->validate();
    $validatedData['author_id'] = auth()->id();
    $validatedData['fileModel'] = $validatedData['fileModel']['id'];

    $post = BlogPosts::create($validatedData);
    // Replace only with new file.
    $post->files()->sync($this->fileModel);
    $post->save();

    // Invalidate cache tags on blog_posts.
    Cache::tags(['blog_posts'])->flush();

    return redirect()->to('/dashboard');
  }

}
