<?php

namespace App\Livewire\Admin\Fiscalizations;

use Livewire\Component;

class FiscalizationsIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.fiscalizations.fiscalizations-index');
    }
}
