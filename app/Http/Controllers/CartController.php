<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Cartalyst\Stripe\Laravel\Facades\Stripe;

class CartController extends Controller
{
    public function __construct(){
        // force the go back button to reload the page
        $this->middleware('preventBackHistory');
    }

    public function addToCart(Product $product){
        if(session()->has('jellybearCart')){
            $cart = new Cart(session()->get('jellybearCart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('jellybearCart', $cart);
        session()->flash('success', 'Your item has been added to the cart');
        return redirect()->back();
    }

    public function showCart(){
        if(session()->has('jellybearCart')){
            $cart = new Cart(session()->get('jellybearCart'));
        }else{
            $cart = null;
        }
        return view('pages.cartPage')->with([
            'cart'=>$cart
        ]);
    }

    public function addCart(Product $product){
        $cart = new Cart(session()->get('jellybearCart'));
        $cart->addQty($product->id);
        session()->put('jellybearCart', $cart);
        return redirect()->back();
    }

    public function minusCart(Product $product){
        $cart = new Cart(session()->get('jellybearCart'));
        $cart->minusQty($product->id);
        if($cart->totalQty<0){
            session()->forget('jellybearCart');
        }else{
            session()->put('jellybearCart', $cart);
        }
        return redirect()->back();
    }

    public function removeCart(Product $product){
        $cart = new Cart(session()->get('jellybearCart'));
        $cart->remove($product->id);
        if($cart->totalQty<0){
            session()->forget('jellybearCart');
        }else{
            session()->put('jellybearCart', $cart);
        }
        return redirect()->back();
    }

    public function checkoutCart($amount){
        if(session()->has('jellybearCart')){
            $cart = new Cart(session()->get('jellybearCart'));
        }else{
            $cart = null;
        }
        return view('pages.checkoutPage')->with([
            'amount'=>$amount,
            'cart'=>$cart
        ]);
    }

    // submit the payment
    public function charge(Request $request){
        $charge = Stripe::charges()->create([
            'currency'=>'USD',
            'source'=>$request->stripeToken,
            'amount'=>$request->amount,
            'description'=>'test'
        ]);
        $chargeId = $charge['id'];
        if($chargeId){
           Order::create([
                'name'=>$request->name,
                'address'=>$request->address,
                'city'=>$request->city,
                'state'=>$request->state,
                'zipcode'=>$request->zipcode,
                'phone_number'=>$request->phone_number,
               'cart'=>serialize(session()->get('jellybearCart'))
           ]); 
           session()->forget('jellybearCart');

           return redirect()->to('/')->with([
               'success' => 'You have already checked out'
           ]);
        }else{
            return redirect()->back();
        }
    }
}
