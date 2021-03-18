<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;
use Livewire\WithPagination;

class Item extends Component
{
    use WithPagination;

    public $qty='1';


    public $paginate = 6;
    
    
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

   public function paginationView()
   {
       return 'ui.paginate';
   }
    public function render()
    {
        if (request()->categorie) {

            $products =  Product::with('categories')->whereHas('categories', function($query) {

                $query->where('slug', request()->categorie);

            })->paginate($this->paginate);

        }else{

            $products = Product::with('categories')->paginate($this->paginate);
        }
       
        return view('livewire.products.item', ['products' => $products]);
    }
}
