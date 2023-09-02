<?php

namespace App\Livewire\Admin\Juridico;

use Livewire\Component;

class JuridicoCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.juridico.juridico-create');
    }
}
