<?php

namespace App\Livewire\Admin\Juridico;

use Livewire\Component;

class JuridicoIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.juridico.juridico-index');
    }
}
