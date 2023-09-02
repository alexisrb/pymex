<?php

namespace App\Livewire\Admin\Fiscalizations;

use Livewire\Component;

class FiscalizationsCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.fiscalizations.fiscalizations-create');
    }
}
