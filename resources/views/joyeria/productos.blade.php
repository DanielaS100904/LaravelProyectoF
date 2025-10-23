@extends('layouts.app')

@section('content')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<div class="container py-5">
    <h1 class="text-center mb-5">Nuestros Productos</h1>

    <div class="row">
        @forelse ($productos as $producto)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    @if($producto->imagen)
                        <img src="{{ asset('storage/' . $producto->imagen) }}" 
                             class="card-img-top" 
                             alt="{{ $producto->nombre }}"
                             style="height: 220px; object-fit: cover;">
                    @else
                        <img src="{{ asset('images/no-image.jpg') }}" 
                             class="card-img-top" 
                             alt="Sin imagen"
                             style="height: 220px; object-fit: cover;">
                    @endif

                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                        <p class="text-muted mb-2">${{ number_format($producto->precio, 2) }}</p>
<a href="{{ route('tienda.producto', $producto->id) }}" class="btn btn-outline-secondary btn-sm mb-2">
    Ver detalles
</a>
<a href="{{ route('carrito.agregar', $producto->id) }}" class="btn btn-primary btn-sm">
    Agregar al carrito
</a>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No hay productos disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
