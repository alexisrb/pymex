<?php

namespace App\Livewire\Admin\Surveys;

use Livewire\Component;

class SurveysCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.surveys.surveys-create');
    }
}
