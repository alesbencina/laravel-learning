<?php

namespace App\Http\Livewire\Admin\Tag;

use App\Models\File;
use App\Models\Tag;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {

  public bool $isNew = TRUE;

  public Tag $tag;

  public File $fileModel;

  public function mount(Tag $tag) {
    if ($tag->exists) {
      $this->isNew = FALSE;
      $this->tag = $tag;
    }
    else {
      $this->tag = new Tag();
    }

    $this->fileModel = $this->tag->files()->first() ?? new File();
  }

  /**
   * Listed to the file upload.
   */
  protected $listeners = ['fileUploaded'];

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

  public function rules() {
    $tagId = $this->tag?->id;
    return [
      'tag.name' => 'required|string|min:3',
      'tag.url_alias' => [
        'required',
        Rule::unique('tags', 'url_alias')->ignore($tagId),
      ],
    ];
  }

  public function render() {
    return view('livewire.admin.tag.form');
  }

  public function store() {
    $this->validate();

    if ($this->isNew) {
      $this->tag->save();
    }
    // Replace only with new file.
    $this->tag->files()->sync($this->fileModel);
    $this->tag->save();
    $status = $this->isNew ? 'created' : 'updated';
    $tagName = $this->tag->name;
    return redirect()
      ->to('/admin/tags-overview')
      ->with('success', "Tag $tagName is $status.");
  }

}
