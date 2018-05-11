<?php
 
namespace App\Traits;
 
trait CartTrait {
 
    public function calcCartData($cart)
    {
        $cartTotal = '0';
        $cartSubTotal = '0';
        foreach($cart->details as $item){
            if($item->discount > '0'){
                $cartSubTotal += calcValuePercentNeg($item->price, $item->discount) * $item->quantity;
            } else {
                $cartSubTotal += $item->price * $item->quantity;
            }
        }
        $cartTotal = $cartSubTotal + calcPercent($cartSubTotal, $cart->payment_percent) + $cart->shipping_price;
    
        $cart = array("cart" => $cart, "paymentPercent" => $cart->payment_percent, "shippingPrice" => $cart->shipping_price, "subTotal" => $cartSubTotal, "total" => $cartTotal);
        return $cart;
    }
 
}