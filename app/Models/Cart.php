<?php

namespace App\Models;

class Cart{
    public $items = [];
    public $totalQty;
    public $totalPrice;

    public function __construct($cart = null){
        if($cart){
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        }else{
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }


    public function add($product){
        $item = [
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'image' => $product->image,
            'qty' => 0
        ];
        if(!array_key_exists($product->id, $this->items)){
            $this->items[$product->id] = $item;
            $this->totalQty +=1;
            $this->totalPrice += $product->price;
        }else{
            $this->totalQty +=1;
            $this->totalPrice += $product->price;
        }
        $this->items[$product->id]['qty']+=1;
    }

    // add a single product qty
    public function addQty($id){
        $this->items[$id]['qty']+=1;
        $this->totalQty+=1;
        $this->totalPrice += $this->items[$id]['price'];
    }

    // minus a single product qty
     public function minusQty($id){
         if($this->items[$id]['qty']>1){
            $this->items[$id]['qty']-=1;
            $this->totalQty-=1;
            $this->totalPrice -= $this->items[$id]['price'];
         }else{ 
            $this->totalQty-=1;
            $this->totalPrice -= $this->items[$id]['price'];
            unset($this->items[$id]);
         }       
    }

    // remove an item from the cart
    public function remove($id){
        if(array_key_exists($id, $this->items)){
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['price'];
            unset($this->items[$id]);
        }
    }
}

?>