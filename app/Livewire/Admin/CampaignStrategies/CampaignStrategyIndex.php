<?php

namespace App\Livewire\Admin\CampaignStrategies;

use Livewire\Component;

class CampaignStrategyIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.campaign-strategies.campaign-strategy-index');
    }
}
