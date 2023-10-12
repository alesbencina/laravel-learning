<?php

namespace App\Livewire\Frontend\Tags;

use Livewire\Component;

class Teaser extends Component {

  public $tags = [];

  public function render() {
    return view('livewire.frontend.tags.teaser');
  }

}
