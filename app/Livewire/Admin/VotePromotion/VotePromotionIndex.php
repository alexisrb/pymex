<?php

namespace App\Livewire\Admin\VotePromotion;

use Livewire\Component;

class VotePromotionIndex extends Component
{
    public $user, $name, $foto;
    
    public function render()
    {
        return view('livewire.admin.vote-promotion.vote-promotion-index');
    }
}
