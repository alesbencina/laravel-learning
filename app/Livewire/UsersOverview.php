<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UsersOverview extends Component
{
    public function render()
    {
        $users = User::paginate(30);

        return view('livewire.admin.users.overview', [
            'users' => $users,
        ]);
    }
}
