<?php 
namespace App\Traits;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

trait VerificationStock
{
  public  function checkIfQtyNotAvailable()
  {
    foreach(Cart::content() as $item) {
      $product =  Product::find($item->model->id);
      if ($product->stock < $item->qty ) {

        return true;
      }
     
    }
    return false;
  }
  
}
