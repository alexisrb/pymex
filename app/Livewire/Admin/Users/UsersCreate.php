<?php

namespace App\Livewire\Admin\Users;

use Livewire\Component;

class UsersCreate extends Component
{
    public $user, $name, $foto;

    public function save(){
        
    }


    public function render()
    {
        return view('livewire.admin.users.users-create');
    }
}
