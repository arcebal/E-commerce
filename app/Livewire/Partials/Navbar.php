<?php

namespace App\Livewire\Partials;

use App\Helpers\CartManagement;
use Livewire\Component;
use Livewire\Attributes\On;

class Navbar extends Component
{
    public $total_count = 0;

    public function mount()
    {
        $this->total_count = count(CartManagement::getCartItemsFromCookie());
    }

    

    #[On('update-cart-count')]
    public function updateCartCount($total)
    {
        $this->total_count = $total;
    }

    public function render()
    {
        return view('livewire.partials.navbar');
    }
}
