<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class UsersIndex extends Component
{
    public $user, $name, $foto;

    public function render()
    {
        return view('livewire.admin.users.users-index');
    }
}
