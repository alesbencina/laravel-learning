<?php

namespace App\Http\Livewire\Admin\Tag;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {

  public bool $isNew = TRUE;

  public Tag $tag;

  public function mount(Tag $tag) {
    if ($tag->exists) {
      $this->isNew = FALSE;
      $this->tag = $tag;
    }
    else {
      $this->tag = new Tag();
    }
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
    $this->tag->save();
    session()->flash('success', 'Post successfully updated.');
  }

}
