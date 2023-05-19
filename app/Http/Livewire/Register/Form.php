<?php

namespace App\Http\Livewire\Register;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Form extends Component {

  public $email;

  protected $rules = [
    'email' => 'required|email',
    'username' => [
      'required',
      'max:255',
      'min:3',
    ],
    ['password' => 'required'],
    ['email' => 'required|email|unique:users,email']
  ];

  protected $messages = [
    'email.required' => 'The Email Address cannot be empty.',
    'email.email' => 'The Email Address format is not valid.',
  ];


  protected $validationAttributes = [
    'email' => 'email address',
  ];

  public function registerUser() {
    $validatedData = $this->validate();

    $user = User::create($validatedData);

    //session()->flash('success', 'Account created');
    // Log the user in.

    auth()->login($user);

    return redirect("/blog-posts")->with('success', 'Account created');
  }

  public function render() {
    return view('livewire.register.form');
  }

}
