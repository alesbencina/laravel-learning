<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
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
