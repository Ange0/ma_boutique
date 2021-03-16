<?php

namespace App\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckOutController extends Controller
{
    public function index()
    {
       Stripe::setApiKey('sk_test_51HdbNoIvcdlShppOjkPFKAPYD39qtmkbZUxUGddiFt71Wh5Ho50giDRquLfPLQOUrxe7usDISgvqHvBHorOOu1zs006WdsPJIx');

       $intent = PaymentIntent::create([
       'amount' => Cart::total(),
        'currency' => 'xaf',
        // Verify your integration in this guide by including this parameter
        'metadata' => ['integration_check' => 'accept_a_payment'],
      ]);
      
       return  view('checkout.index', ['client_secret' => $intent->client_secret]);
    }
}
