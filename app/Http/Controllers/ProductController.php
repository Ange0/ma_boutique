<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function item()
    {
        return view('products.item');
    }

    public function show($slug)
    {   
        $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('products.show')->with('product', $product);
    }

    public function search(Request $request)
    {   
     request()->validate([
        'q' => 'required|min:3'
     ]);
      $q = $request->input('q');
      $productsSearch =  Product::where("name", "like", "%$q%")
            ->orWhere("description", "like", "%$q%")
            ->paginate(6);
      return view('products.search', ["products" => $productsSearch ]);
    }

}
