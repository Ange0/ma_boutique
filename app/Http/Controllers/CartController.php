<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator = $Validator = Validator::make($data, [
            'qty' => 'required|numeric|between:1,6'
        ]);

        if ($validator->fails()) {
            session()->flash('error', 'Quantité incorrecte ' .$data['qty']);
            return response()->json(['error' => 'Quantité incorrecte']);
        }
        if ($data['qty'] > $data['stock']) {

            session()->flash('error', 'La quantitée '.$data['qty'].' de ce produit n\'est pas disponible ');
            return response()->json(['error' => 'Quantité indisponible']);
        }
        Cart::update($rowId, $data['qty']);

        session()->flash('success', 'La quantité est passée à ' .$data['qty']);

        return response()->json(['success' => 'La quantitié à bien été mis à jour ']);

    }

}
