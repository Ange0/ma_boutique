<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Item extends Component
{
    public $products;
    public $qty='1';
    
    protected $listeners = ['store'];


    public function store($productId)
   {
       
       $duplicata = Cart::search(function($cartProduct, $rowId) use ($productId) {
           
           return $cartProduct->id === (int) $productId;
       });
 
       if ($duplicata->isNotEmpty()) {
           
          return session()->flash('success', 'Produit existe déjà dans le panier');
       }
       
       $product = Product::find($productId);

       Cart::add($product->id, $product->name, (int) $this->qty, $product->price)->associate('App\Models\Product');

      return  $this->emit('render');
 

   }
    public function render()
    {
        
        return view('livewire.products.item');
    }
}
