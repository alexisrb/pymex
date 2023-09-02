<?php

namespace App\Livewire\Admin\Signatures;

use Livewire\Component;

class SignaturesCreate extends Component
{
    public $user, $name, $foto;
    public function render()
    {
        return view('livewire.admin.signatures.signatures-create');
    }
}
