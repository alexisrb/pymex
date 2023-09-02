<?php

namespace App\Livewire\Admin\Electoral;

use Livewire\Component;

class ElectoralIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.electoral.electoral-index');
    }
}
