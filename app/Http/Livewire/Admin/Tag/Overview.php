<?php

namespace App\Http\Livewire\Admin\Tag;

use App\Models\Tag;
use Livewire\Component;

class Overview extends Component {

  private $itemsPerPage = 2;

  public function render() {
    return view('livewire.admin.tag.overview',[
      'tags' => Tag::with([])->paginate($this->itemsPerPage)
      ]
    );
  }

}
