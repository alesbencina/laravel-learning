<?php

namespace App\Http\Livewire\Admin\Blog;

use App\Models\BlogPosts;
use App\Models\File;
use App\Models\Tag;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

abstract class BlogBaseComponent extends Component {

  use WithFileUploads;

  /**
   * The related blog post.
   */
  public BlogPosts $post;

  /**
   * The component title property.
   */
  public string $title;

  /**
   * The component title property.
   */
  public string $description;

  /**
   * The component title property.
   */
  public bool $status;

  /**
   * The component title property.
   */
  public string $url_alias;

  /**
   * The component title property.
   */
  public string $summary;

  /**
   * The tags collection.
   */
  public array $tags;

  /**
   * The current blog tags.
   */
  public array $blogTags;

  /**
   * The blog teaser image.
   */
  public File $fileModel;

  /**
   * Listed to the file upload.
   */
  protected $listeners = ['fileUploaded'];

  /**
   * Constructs the blog post component properties.
   *
   * @return void
   */
  public function mount() {
    $this->title = '';
    $this->description = '';
    $this->status = '';
    $this->url_alias = '';
    $this->summary = '';
    $this->tags = Tag::get()->pluck('name', 'id')->toArray();
    $this->blogTags = [];
    $this->fileModel = new File();
  }

  /**
   * Redirect to dashboard overview.
   *
   * @return void
   */
  public function backToOverview() {
    return $this->redirect('/dashboard');
  }

  /**
   * Return the rendered view.
   *
   * @return \Illuminate\View\View
   */
  abstract public function render(): View;

  /**
   * Assign the file to the file model.
   *
   * @param $file
   *
   * @return void
   */
  public function fileUploaded($file) {
    $this->fileModel = File::find($file['id']);
  }

  /**
   * The form rules.
   *
   * @return array
   *   Returns a default array of rules.
   */
  protected function rules(): array {
    return [
      'title' => 'required',
      'description' => 'required',
      'summary' => 'required',
      'fileModel' => [
        'required',
      ]
    ];
  }

}
