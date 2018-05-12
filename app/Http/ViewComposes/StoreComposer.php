<?php 

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Cart;


class StoreComposer
{
	public function compose(View $view)
	{
        $cartTotal = 0;
        $cartSubTotal = 0;
        $payment_percent = 0;
        $shipping_price = 0;
        
        if(auth()->guard('customer')->check()){
            $cart = Cart::where('status', '=', 'Active')->where('customer_id', auth()->guard('customer')->user()->id)->first();
        } else {
            $cart = null;
        }

        if($cart != null){
            foreach($cart->details as $item){
                if($item->article->discount > '0'){
                    $cartSubTotal += calcValuePercentNeg($item->article->price, $item->article->discount) * $item->quantity;
                } else {
                    $cartSubTotal += $item->article->price * $item->quantity;
                }
            }
            $cartTotal = $cartSubTotal + calcPercent($cartSubTotal,$cart->payment_percent) + $cart->shipping_price;

            function debugCalc($cartSubTotal, $shipping_price, $payment_percent, $cartTotal) {
                echo '<div class="container" style="padding: 10px">';
                echo "Subtotal: $".$cartSubTotal."<br>";
                echo "Costo envío: $".$shipping_price."<br>";
                echo "Porcentaje pago: %".$payment_percent."<br>";
                echo "Costo pago: $". calcPercent($cartSubTotal, $payment_percent)."<br>";
                echo "Total: $".$cartTotal."<br>";
                echo '</div>';
                // die();
            }
            //debugCalc($cartSubTotal, $cart->shipping_price, $cart->payment_percent, $cartTotal);
            
            $activeCart = array("activeCart" => $cart, "paymentPercent" => $cart->payment_percent, "shippingPrice" => $cart->shipping_price, "cartSubTotal" => $cartSubTotal, "cartTotal" => $cartTotal);
        } else {
            $activeCart = null;
        }
        
        $view->with('activeCart', $activeCart);
        
        
	}
}