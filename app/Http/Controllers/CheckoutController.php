<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;
class CheckoutController extends Controller
{
    //public function step1(){
    //	if (Auth::check()) {
    //		return redirect()->route('checkout.shipping');

    //	}
    //	return redirect('login');
    //}

    public function shipping(){
 return view('front.shipping-info');
    }
public function payment(){
	return view('front.payment');
}

public function storePayment(Request $request){
	\Stripe\Stripe::setApiKey("sk_test_dCxUu0HFvQpY6QaMaRBxs7jS");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $request->stripeToken;
$charge = \Stripe\Charge::create([
    'amount' => Cart::total()*100,
    'currency' => 'usd',
    'description' => 'Example charge',
    'source' => $token,
]);
//CREATE ORDER
  Order::createOrder();
  Cart::destroy();
  return redirect('/')->with('order successfully');
  
	}
}

