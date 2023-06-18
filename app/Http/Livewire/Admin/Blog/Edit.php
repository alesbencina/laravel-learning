<?php

namespace App\Http\Livewire\Admin\Blog;

use Livewire\Component;

class Edit extends Component {

  public $post;

  public string $title;

  public string $description;

  public bool $status;

  public string $slug;

  protected $rules = [
    'title' => 'required',
    'description' => 'required',
  ];

  public function mount() {
    $this->title = $this->post->title;
    $this->description = $this->post->description;
    $this->status = $this->post->status;
    $this->slug = $this->post->url_alias;
  }

  public function render() {
    return view('livewire.admin.blog.edit');
  }

  public function update() {
    $this->post->title = $this->title;
    $this->post->description = $this->description;
    $this->post->status = $this->status;
    $this->post->save();
    session()->flash('message', 'Post successfully updated.');
    $this->emit('gotoTop');
  }

  public function backToOverview() {
    return $this->redirect('/dashboard');
  }

}
