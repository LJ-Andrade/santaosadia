<aside class="sidebar">
    <div class="padding-top-2x hidden-lg-up"></div>
    <!-- Order Summary Widget-->
    <section class="widget widget-order-summary">
        <h3 class="widget-title">Resumen de Pedido</h3>
        <table class="table">
        <tr>
            <td>Subtotal:</td>
            <td class="text-medium dont-break">$ {{ $activeCart['cartSubTotal'] }}</td>
        </tr>
        <tr>
            <td>Costo de envío:</td>
            <td class="text-medium dont-break">
                @if($activeCart['shippingPrice'] != null)
                
                    $ {{ $activeCart['shippingPrice'] }}
                @else
                    $ 0
                @endif
            </td>
        </tr>
        <tr>
            @if($activeCart['paymentPercent'] !=null)
            <td>Recargo por forma de pago: <br> (% {{ $activeCart['paymentPercent'] }}) </td>
            <td class="text-medium dont-break">
                $ {{ calcPercent($activeCart['cartSubTotal'], $activeCart['paymentPercent']) }}
            </td>    
            @else
            <td>Recargo: </td>
            <td class="text-medium dont-break">
                $ 0
            </td>
            @endif
        </tr>
        <tr>
            <input id="CartTotal" type="hidden" name="carttotal" value="{{ $activeCart['cartTotal'] }}">
            <td></td>
            <td class="text-lg text-medium txtR dont-break"><h4>Total $ {{ $activeCart['cartTotal'] }}</h4></td>
        </tr>
        </table>
    </section>
    <!-- Featured Products Widget-->  
</aside>