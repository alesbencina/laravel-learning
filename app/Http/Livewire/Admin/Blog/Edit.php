<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Livewire\Component;
use Illuminate\Validation\Rule;

class Edit extends Component {

  public BlogPosts $post;

  public string $title;

  public string $description;

  public bool $status;

  public string $url_alias;

  public string $summary;

  protected function rules() {
    return [
      'title' => 'required',
      'description' => 'required',
      'url_alias' => [
        'required',
        Rule::unique('blog_posts', 'id')->ignore($this->post->id),
      ],
      'summary' => 'required',
    ];

  }

  public function mount() {
    $this->title = $this->post->title;
    $this->description = $this->post->description;
    $this->status = $this->post->status;
    $this->url_alias = $this->post->url_alias;
    $this->summary = $this->post->summary;
  }

  public function render() {
    return view('livewire.admin.blog.edit');
  }

  public function store() {
    $this->validate();
    $this->post->title = $this->title;
    $this->post->description = $this->description;
    $this->post->status = $this->status;
    $this->post->summary = $this->summary;
    $this->post->url_alias = $this->url_alias;
    $this->post->save();
    session()->flash('message', 'Post successfully updated.');
    $this->emit('gotoTop');
  }

  public function backToOverview() {
    return $this->redirect('/dashboard');
  }

}
