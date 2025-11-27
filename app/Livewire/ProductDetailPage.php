<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Product;
use App\Helpers\CartManagement;

#[Title('Product Detail Page - CeballosCodeMania')]
class ProductDetailPage extends Component
{
    public $slug;
    public $quantity = 1;

    public function mount($slug)
    {
        $this->slug = $slug;
    }

    public function increaseQty() {
    $this->quantity++;
    }

    public function decreaseQty() {
        if($this->quantity > 1){
            $this->quantity--;
        }
    }

    public function addToCart($product_id)
    {
        $total_count = CartManagement::addItemToCart($product_id);

        // Force update to navbar
        $this->dispatch('update-cart-count', total: $total_count);
    }
    

    public function render()
    {
        return view('livewire.product-detail-page', [
            'product' => Product::where('slug', $this->slug)->firstOrFail()
        ]);
    }
}
