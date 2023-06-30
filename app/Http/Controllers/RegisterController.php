<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

/**
 * Provides registration controller.
 */
class RegisterController extends Controller
{

  /**
   * Returns a registration form.
   *
   * @return \Illuminate\View\View
   *   Returns a registration form view.
   */
    public function create(): View
    {
        return view('register.create');
    }

  /**
   * Register the user and automatically log it.
   *
   * @return \Illuminate\Http\RedirectResponse
   *   Return logged user to homepage.
   */
    public function store(): RedirectResponse
    {
        $validation = request()->validate([
            'name' => 'required|min:3',
            'username' => [
                'required',
                'max:255',
                'min:3',
                Rule::unique('users', 'username'),
            ],
            // @todo custom rule, min chars whatever.
            'password' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        $user = User::create($validation);

        auth()->login($user);

        return redirect('/')->with('success', 'Account created');
    }
}
