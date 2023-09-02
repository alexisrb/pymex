<?php

namespace App\Livewire\Admin\Signatures;

use Livewire\Component;

class SignaturesIndex extends Component
{
    public $user, $name, $foto;
    public function render()
    {
        return view('livewire.admin.signatures.signatures-index');
    }
}
