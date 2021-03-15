<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function item()
    {
        
        $products = Product::inRandomOrder()->take(6)->get();

        return view('products.item')->with('products', $products);
    }

    public function show($slug)
    {   
        $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('products.show')->with('product', $product);
    }
}
