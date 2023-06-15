<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component {

  protected $layout = 'admin';

  public function render() {
    return view('livewire.admin.dashboard');
  }

}
