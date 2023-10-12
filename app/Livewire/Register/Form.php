<?php

namespace App\Livewire\Register;

use App\Models\User;
use App\Permissions\Roles;
use Livewire\Component;

class Form extends Component
{
    public $email;

    public $username;

    public $password;

    public $name;

    protected array $rules = [
        'password' => 'required',
        'email' => 'required|unique:users,email',
        'username' => 'required|max:255|unique:users,username',
        'name' => 'required|unique:users,username',
    ];

    protected array $messages = [
        'email.required' => 'The Email Address cannot be empty.',
        'email.email' => 'The Email Address format is not valid.',
        'password.required' => 'The password is required',
        'username.required' => 'The username is required',
    ];

    protected array $validationAttributes = [
        'email' => 'email address',
        'password' => 'password',
        'username' => 'username',
    ];

    public function registerUser()
    {
        $validatedData = $this->validate();

        $user = User::create($validatedData);
        $user->assignRole(Roles::WRITER);

        // Log the user in.
        auth()->login($user);

        return redirect('/')->with('success', 'Account created and assigned role'.Roles::WRITER);
    }

    public function render()
    {
        return view('livewire.register.form');
    }
}
