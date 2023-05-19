<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component {

  public $count = 0;

  public $authId;


  public function increment() {
    $this->authId = 1;
  }

  public function render() {
    $this->increment();
    $a = 0;
    return view('livewire.counter');
  }

}
