<?php

namespace App\Livewire\Admin\Publicity;

use App\Models\Publicity;
use Livewire\Component;

class PublicityIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        $publicities = Publicity::all();

        return view('livewire.admin.publicity.publicity-index', ['publicities' => $publicities]);
    }
}
