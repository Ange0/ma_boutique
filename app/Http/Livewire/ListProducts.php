<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ListProducts extends Component
{
    public function render()
    {
        $products = Product::inRandomOrder()->take(6)->get();

        return view('livewire.list-products')->with('products', $products);
    }
}
