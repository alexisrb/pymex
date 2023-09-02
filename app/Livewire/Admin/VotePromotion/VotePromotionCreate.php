<?php

namespace App\Livewire\Admin\VotePromotion;

use Livewire\Component;

class VotePromotionCreate extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.vote-promotion.vote-promotion-create');
    }
}
