<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-dark" href="{{ url('/') }}">
            Eterna Joyería
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto fw-semibold">
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('proveedores.index') }}">Proveedores</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('tienda.productos') }}">Productos</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="{{ route('inventarios.index') }}">Inventarios</a></li>
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ms-auto align-items-center">

<!-- Hola / Login -->
@guest
    <li class="nav-item d-flex align-items-center border-end pe-3 me-3">
        <span class="text-secondary me-1">Hola,</span>
        <a class="fw-bold text-dark text-decoration-none" href="{{ route('login') }}">Inicia sesión</a>
    </li>
@else
    <li class="nav-item d-flex align-items-center border-end pe-3 me-3">
        <span class="text-secondary me-1">Hola,</span>

        <a class="fw-bold text-dark text-decoration-none" href="#"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ Auth::user()->name }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>
@endguest

<!-- Mis compras -->
<li class="nav-item border-end pe-3 me-3">
    <a class="nav-link fw-semibold d-flex align-items-center text-dark" href="{{ route('compras.index') }}">
        <i class="bi bi-bag-heart me-1 fs-5 text-secondary"></i>
        Mis compras
    </a>
</li>

                <!-- Carrito -->
                <li class="nav-item position-relative">
                    <a class="nav-link fw-semibold d-flex align-items-center text-dark" href="{{ route('carrito.index') }}">
                        <i class="bi bi-cart3 fs-4 text-secondary"></i>
                        <span class="ms-1">Carrito</span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger px-2 py-1">
                            {{ session('carrito') ? count(session('carrito')) : 0 }}
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>