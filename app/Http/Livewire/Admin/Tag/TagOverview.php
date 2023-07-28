<?php

namespace App\Http\Livewire\Admin\Tag;

use App\Models\Tag;
use Livewire\Component;

class TagOverview extends Component
{
  public function render() {
    return view('livewire.admin.tag.tag-overview',[
        'tags' => Tag::with([])->paginate(10)
      ]
    );
  }
}
