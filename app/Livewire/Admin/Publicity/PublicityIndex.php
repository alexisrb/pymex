<?php

namespace App\Livewire\Admin\Publicity;

use Livewire\Component;

class PublicityIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.publicity.publicity-index');
    }
}
