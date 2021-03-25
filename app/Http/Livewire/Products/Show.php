<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class Show extends Component
{
    public $product;
    public $isStock;

    
    public function render()
    {
        return view('livewire.products.show');
    }
}
