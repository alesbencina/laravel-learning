<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * Creates an edit blog form component and storing the blog post.
 */
class Edit extends BlogBaseComponent {

  /**
   * @inheritDoc
   */
  protected function rules(): array {
    return parent::rules() + [
        'url_alias' => [
          'required',
          Rule::unique('blog_posts')->ignore($this->post),
        ],
      ];
  }

  /**
   * @inheritDoc
   */
  public function mount() {
    $this->title = $this->post->title;
    $this->description = $this->post->description;
    $this->status = $this->post->status;
    $this->url_alias = $this->post->url_alias;
    $this->summary = $this->post->summary ?? '';
    $this->tags = Tag::get()->pluck('name','id')->toArray();
    $this->blogTags = $this->post->tag()->pluck('id')->toArray();
  }

  /**
   * @inheritDoc
   */
  public function render(): View {
    return view('livewire.admin.blog.edit');
  }

  /**
   * Store the updated blog post.
   */
  public function store(): void {
    $this->validate();
    $this->post->title = $this->title;
    $this->post->description = $this->description;
    $this->post->status = $this->status;
    $this->post->summary = $this->summary;
    $this->post->url_alias = $this->url_alias;
    $this->post->tag()->attach($this->blogTags);
    $this->post->save();

    session()->flash('message', 'Post successfully updated.');
    $this->emit('gotoTop');
  }

}
