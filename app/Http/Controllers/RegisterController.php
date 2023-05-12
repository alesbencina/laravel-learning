<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller {

  public function create() {
    return view('register.create');
  }

  public function store() {
    $attributes = request()->validate([
      'name' => 'required|min:3',
      //'username' => 'required|min:3|unique:users,username',// |max:255|min:3',
      'username' => [
        'required',
        'max:255',
        'min:3',
        Rule::unique('users', 'username'),
      ],
      'password' => 'required', // ['required','max:255','min:7']
      'email' => 'required|email|unique:users,email',
    ]);

    // $attributes['password'] = bcrypt($attributes['password']);

    $user = User::create($attributes);

    //session()->flash('success', 'Account created');
    // Log the user in.

    auth()->login($user);

    return redirect("/blog-posts")->with('success', 'Account created');
  }

}
