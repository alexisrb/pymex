<?php

namespace App\Livewire\Admin\Social;

use Livewire\Component;

class SocialCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.social.social-create');
    }
}
