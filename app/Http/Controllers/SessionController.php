<?php

namespace App\Http\Controllers;

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

    // Redirect the user if it's admin.
    if (auth()->user()->hasRole('admin')) {
      return redirect('/dashboard');
    }

    return redirect('/blog-posts')->with('success', 'Welcome back');
    //return back()->withErrors(['email' => 'The login failed.']);
  }

  public function create() {
    return view('sessions.create');
  }

}
