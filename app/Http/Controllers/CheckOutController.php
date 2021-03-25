<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Traits\VerificationStock;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckOutController extends Controller
{
  use VerificationStock;
  public function index()
  {
   
    try {
      if (Cart::count() <= 0) {
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
    } catch (\Throwable $th) {
      abort(500, $th->getMessage());
    }

    return  view('checkout.index', ['client_secret' => $intent->client_secret]);
  }
  

  public function store(Request $request)
  {
    if ($this->checkIfQtyNotAvailable()) {
      Session::flash('error', 'Un produit de votre panier n\'est plus disponible' );
      return response()->json(['success' => false], 400);
    }

    $data = $request->json()->all();
    $products = [];
    $i = 0;
    foreach (Cart::content() as $product) {

      $products['product_' . $i]['name'] = $product->model->name;
      $products['product_' . $i]['price'] = $product->model->price;
      $products['product_' . $i]['qty'] = $product->qty;
      $i++;

    }

    $order = new Order();
    $order->payment_intent_id = $data['paymentIntent']['id'];
    $order->amount = $data['paymentIntent']['amount'];
    $order->payment_created_at = (new DateTime())->setTimestamp($data['paymentIntent']['created'])->format('Y-m-d H:i:s');
    $order->products = serialize($products);
    $order->user_id = Auth::user()->id;
    $order->save();

    if ($data['paymentIntent']['status'] === "succeeded") {

      $this->updateStock();

      Cart::destroy();
      session()->flash('success', 'Félicitation Votre commande à été traitée avec  succès ');

      return response()->json(['success', 'Paiement validé avec succès']);

    } else {

      return response()->json(['error', 'Echec du paiment']);
    }

  }

  public function thankYou()
  {
    return session()->has('success') ? view('checkout.thank-you') : redirect()->route('home');
  }

  private function updateStock()
  {
   
    foreach(Cart::content() as $item)
    {
      $product = Product::find($item->model->id);
      $product->update(['stock' => $product->stock - $item->qty]);
      
    }
  }
}
