<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;

class MediaCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.media.media-create');
    }
}
