<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckOutController extends Controller
{
    public function index()
    {

      if (Cart::count() <= 0 ){
        return redirect()->route('home');
      }
       Stripe::setApiKey('sk_test_51HdbNoIvcdlShppOjkPFKAPYD39qtmkbZUxUGddiFt71Wh5Ho50giDRquLfPLQOUrxe7usDISgvqHvBHorOOu1zs006WdsPJIx');

       $intent = PaymentIntent::create([
       'amount' => Cart::total(),
        'currency' => 'xof',
        // Verify your integration in this guide by including this parameter
        'metadata' => [
          'integration_check' => 'accept_a_payment',
          'id' => '15'
        ],
      ]);
      
       return  view('checkout.index', ['client_secret' => $intent->client_secret]);
    }

    public function store(Request $request)
    {
      Cart::destroy();
      $data = $request->json()->all();
      return $data['paymentIntent'];
      
    }
}
