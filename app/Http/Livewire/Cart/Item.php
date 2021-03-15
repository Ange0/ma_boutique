<?php

namespace App\Http\Livewire\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class Item extends Component
{
    public $qty;

   protected $listeners = ['destroy'];
   
    public function destroy($rowId)
    {  
       
        if (Cart::content()->has($rowId)) {

            return Cart::remove($rowId);
         }
       
    }
    public function render()
    {
        return view('livewire.cart.item');
    }
}
