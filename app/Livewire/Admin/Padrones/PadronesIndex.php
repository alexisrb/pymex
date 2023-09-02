<?php

namespace App\Livewire\Admin\Padrones;

use Livewire\Component;

class PadronesIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.padrones.padrones-index');
    }
}
