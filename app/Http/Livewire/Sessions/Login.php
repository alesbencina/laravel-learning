<?php

namespace App\Http\Livewire\Sessions;

use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component {

  public string $email;

  public string $password;

  protected array $rules = [
    'password' => 'required',
    'email' => 'required',
  ];

  public function render() {
    return view('livewire.sessions.login');
  }

  /**
   * Login the user based on the email and password.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Redirect user to the dashboard or home page.
   * @throws \Illuminate\Validation\ValidationException
   *   Throws a validation message that login failed.
   */
  public function login() {
    $validatedData = $this->validate();

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
      return redirect()->to('/dashboard');
    }

    return redirect()->to('/')->with('success', 'Welcome back');
  }

  /**
   * Log out currently logged-in user.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Return the redirect to homepage with message.
   */
  public function destroy() {
    auth()->logout();

    return redirect()->to('/')->with('success', 'Logged out');
  }

}
