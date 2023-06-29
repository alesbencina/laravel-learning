<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;
use Livewire\Component;

class Create extends Component {

  public string $title;

  public string $description;

  public bool $status;

  public string $url_alias;

  public string $summary;

  protected array $rules = [
    'title' => 'required',
    'description' => 'required',
    'url_alias' => 'required|unique:blog_posts,url_alias',
    'summary' => 'required'
  ];

  public function mount() {
    $this->title = '';
    $this->description = '';
    $this->status = '';
    $this->url_alias = '';
    $this->summary = '';
  }

  public function render() {
    return view('livewire.admin.blog.create');
  }

  public function store() {
      $validatedData = $this->validate();
      $validatedData['author_id'] = auth()->id();

      BlogPosts::create($validatedData);
      return redirect()->to('/dashboard');
  }

}
