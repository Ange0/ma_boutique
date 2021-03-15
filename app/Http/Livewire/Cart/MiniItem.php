<?php

namespace App\Http\Livewire\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class MiniItem extends Component
{
    protected $listeners = ['destroy','render'];

    public function destroy($rowId)
    {  
        
        if (Cart::content()->has($rowId)) {
            return Cart::remove($rowId);
         }
       
    } 
    public function render()
    {
        return view('livewire.cart.mini-item');
    }

}
