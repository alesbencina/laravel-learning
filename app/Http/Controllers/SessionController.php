<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {

  public function destroy() {
    auth()->logout();

    return redirect('/')->with('success', 'Logged out');
  }

  public function login() {
    // Authenticate and login the user based on creds.
    $attributes = request()->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    if (!auth()->attempt($attributes)) {
      throw ValidationException::withMessages([
        'email' => 'The login failed.',
      ]);
    }

    // Session injection.
    session()->regenerate();
    return redirect('/blog-posts')->with('success', 'Welcome back');
    //return back()->withErrors(['email' => 'The login failed.']);
  }

  public function create() {
    return view('sessions.create');
  }

}
