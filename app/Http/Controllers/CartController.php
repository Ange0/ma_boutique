<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function item()
    {
        return view('cart.item');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $duplicata = Cart::search(function($cartProduct, $rowId) use ($request) {
            
            return $cartProduct->id === (int) $request->product_id;
        });
  
        if ($duplicata->isNotEmpty()) {
            
            return redirect()->route('home')->with('success', 'Produit a déjà été ajouté au panier');
        }
        
        $product = Product::find($request->product_id);
        
        
        Cart::add($product->id, $product->name, (int) $request->qty, $product->price)->associate('App\Models\Product');

        return redirect()->route('cart.index')->with('success', 'Produit a  été ajouté au panier');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
