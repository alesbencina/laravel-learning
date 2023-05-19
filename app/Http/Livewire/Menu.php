<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Menu extends Component {

  /**
   * Hardcoded menu links with some attributes.
   *
   * @var \string[][]
   */
  public $menuLinks = [
    ['name' => 'Home', 'url' => '/', 'loggedIn' => FALSE],
    ['name' => 'About', 'url' => '/about', 'loggedIn' => FALSE],
    ['name' => 'Login', 'url' => '/login', 'loggedIn' => FALSE],
    ['name' => 'Register', 'url' => '/register', 'loggedIn' => FALSE],
  ];

  /**
   * Preprocess links based if user is logged in or guest.
   *
   * @return void
   */
  protected function preprocessMenuLinks() {
    $isLoggedIn = Auth::check();

    $this->menuLinks = collect($this->menuLinks)
      ->filter(function ($link) use ($isLoggedIn) {
        return $isLoggedIn === $link['loggedIn'];
      })
      ->all();
  }

  public function render() {
    $this->preprocessMenuLinks();
    return view('livewire.menu');
  }

}
