<?php

namespace App\Livewire\Admin\Geographys;

use Livewire\Component;

class GeographysIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.geographys.geographys-index');
    }
}
