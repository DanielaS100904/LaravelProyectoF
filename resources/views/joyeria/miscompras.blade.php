@extends('layouts.app')

@section('content')
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

@section('content')
<div class="container py-5">
    <h1 class="text-center mb-4">Mis Compras</h1>

    @if($compras->isEmpty())
        <p class="text-center text-muted">Aún no has realizado ninguna compra.</p>
    @else
        <div class="row">
            @foreach($compras as $compra)
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Compra #{{ $compra->id }}</h5>
                            <p class="mb-2">Fecha: {{ $compra->created_at->format('d/m/Y') }}</p>
                            <p class="mb-2">Total: <strong>${{ number_format($compra->total, 2) }}</strong></p>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
