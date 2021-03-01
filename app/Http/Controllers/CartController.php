<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class CartController extends Controller
{
    public function addToCart(Product $product){
        if(session()->has('jellybearCart')){
            $cart = new Cart(session()->get('jellybearCart'));
        }else{
            $cart = new Cart();
        }
        $cart->add($product);
        session()->put('jellybearCart', $cart);
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
}
