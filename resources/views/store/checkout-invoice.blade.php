@extends('layouts.store.invoice')

@section('title', 'Comprobante | Pedido N°'.$order->id)


@section('content')
    <div class="invoice-ticket">
        <div class="header">
            <b>Comprobante de compra</b>  | Pedido N° <b>{{ $order->id }}</b>
            <div class="right">{{ transDateT($order->created_at) }}</div>
        </div>
        <div class="content">
                <div class="top-text">
                    {{ $order->customer->name }} {{ $order->customer->surname }} | Nombre de usuario: {{ $order->customer->username }} <br>
                    {{ $order->customer->address }} | {{ $order->customer->geoprov->name }} | {{ $order->customer->geoloc->name }} <br>
                    {{ $order->customer->phone }} <br>
                    {{ $order->customer->email }} <br>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Talle</th>
                            <th>Color</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->details as $item)
                        <tr>
                            <td>{{ $item->article->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>{{ $item->size }}</td>
                            <td>{{ $item->article->color }}</td>
                            @if($item->discount > 0)
                                <td>$ {{ calcValuePercentNeg($item->price, $item->discount) }}</td>
                            @else
                                <td>$ {{ $item->price }}</td>
                            @endif
                            <td></td>
                        </tr>
                        @endforeach
                        <tr style="border: 1px solid black">
                            <td></td><td></td><td></td>
                            <td>Subtotal</td>
                            <td>$ {{ $cartData['subTotal'] }}</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td>
                            <td>Costo de envío</td>
                            <td>$ {{ $cartData['shippingPrice'] }}</td>
                        </tr>
                        <tr>
                            <td></td><td></td><td></td>
                            <td>Recargo por forma de pago (% {{ $cartData['paymentPercent'] }})</td>
                            <td>$ {{ calcPercent($cartData['subTotal'], $cartData['paymentPercent']) }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>TOTAL</td>
                            <td>$ {{ $cartData['total'] }}</td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
    <div class="footer">Santaosadia - Indumentaria</div>
@endsection