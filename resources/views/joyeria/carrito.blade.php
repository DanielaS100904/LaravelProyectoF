@extends('layouts.app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Tu Carrito de Compras</h1>

    @if (session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    @if (count($carrito) > 0)
        <table class="table table-bordered align-middle">
            <thead class="table-light text-center">
                <tr>
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carrito as $item)
                    <tr class="text-center">
                        <td>
                            @if($item['imagen'])
                                <img src="{{ asset('storage/' . $item['imagen']) }}" width="70" alt="{{ $item['nombre'] }}">
                            @else
                                <img src="{{ asset('images/no-image.jpg') }}" width="70" alt="Sin imagen">
                            @endif
                        </td>
                        <td>{{ $item['nombre'] }}</td>
                        <td>${{ number_format($item['precio'], 2) }}</td>
                        <td>{{ $item['cantidad'] }}</td>
                        <td>${{ number_format($item['subtotal'], 2) }}</td>
                        <td>
                            <a href="{{ route('carrito.eliminar', $item['id']) }}" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <h4>Total: <strong>${{ number_format($total, 2) }}</strong></h4>
            <a href="{{ route('carrito.vaciar') }}" class="btn btn-outline-danger mt-3">Vaciar carrito</a>
<a href="{{ route('checkout.form') }}" class="btn btn-success mt-3">Proceder al pago</a>

        </div>
    @else
        <p class="text-center text-muted">Tu carrito está vacío.</p>
    @endif
</div>
@endsection
