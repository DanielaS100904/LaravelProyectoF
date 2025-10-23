@extends('layouts.app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

@section('content')
<div class="container py-5 text-center">
    <h1 class="mb-4 text-success">¡Pedido confirmado!</h1>

    <p class="lead mb-4">
        Gracias <strong>{{ $pedido['cliente']['nombre'] }}</strong> por tu compra.<br>
        Hemos enviado la confirmación a <strong>{{ $pedido['cliente']['email'] }}</strong>.
    </p>

    <div class="card mx-auto mb-4" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title mb-3">Detalles del pedido</h5>
            <ul class="list-group mb-3">
                @foreach ($pedido['productos'] as $item)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $item['nombre'] }} (x{{ $item['cantidad'] }})
                        <span>${{ number_format($item['subtotal'], 2) }}</span>
                    </li>
                @endforeach
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>${{ number_format($pedido['total'], 2) }}</strong>
                </li>
            </ul>
        </div>
    </div>

    <a href="{{ route('tienda.productos') }}" class="btn btn-primary">Seguir comprando</a>
</div>
@endsection
