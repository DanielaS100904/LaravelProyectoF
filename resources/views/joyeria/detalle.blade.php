@extends('layouts.app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

@section('content')
<div class="container">
    <h1>{{ $producto->nombre }}</h1>
    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>

    <a href="{{ route('tienda.productos') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection
