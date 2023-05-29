<?php

namespace App\Http\Livewire\Register;

use App\Models\User;
use Livewire\Component;

class Form extends Component
{
    public $email;

    public $username;

    public $password;

    public $name;

    protected $rules = [
        'password' => 'required',
        'email' => 'required|unique:users,email',
        'username' => 'required|max:255|unique:users,username',
        'name' => 'required|unique:users,username',
    ];

    protected $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'password.required' => 'The password is required',
        'username.required' => 'The username is required',
    ];

    protected $validationAttributes = [
        'email' => 'email address',
        'password' => 'password',
        'username' => 'username',
    ];

    public function registerUser()
    {
        $validatedData = $this->validate();

        $user = User::create($validatedData);

        //session()->flash('success', 'Account created');
        // Log the user in.

        auth()->login($user);

        return redirect('/blog-posts')->with('success', 'Account created');
    }

    public function render()
    {
        return view('livewire.register.form');
    }
}
