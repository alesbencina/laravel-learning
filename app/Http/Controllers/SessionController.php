<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

/**
 * Provides a session controller.
 */
class SessionController extends Controller {

  /**
   * Returns login view.
   *
   * @return \Illuminate\View\View
   *   Returns login view.
   */
  public function create(): View {
    return view('sessions.create');
  }

  /**
   * Login the user based on the email and password.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Redirect user to the dashboard or home page.
   * @throws \Illuminate\Validation\ValidationException
   *   Throws a validation message that login failed.
   */
  public function login(): RedirectResponse {
    $validatedData = request()->validate([
      'email' => 'required',
      'password' => 'required',
    ]);

    // Try to log in the user.
    if (!auth()->attempt($validatedData)) {
      throw ValidationException::withMessages([
        'email' => 'The login failed.',
      ]);
    }

    // When user is logged in create a new session id.
    session()->regenerate();

    // Redirect the user if it's admin.
    if (auth()->user()->hasRole('admin')) {
      return redirect('/dashboard');
    }

    return redirect('/')->with('success', 'Welcome back');
  }

  /**
   * Log out currently logged-in user.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Return the redirect to homepage with message.
   */
  public function destroy(): RedirectResponse {
    auth()->logout();

    return redirect('/')->with('success', 'Logged out');
  }

}
