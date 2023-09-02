<?php

namespace App\Livewire\Admin\Media;

use Livewire\Component;

class MediaIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.media.media-index');
    }
}
