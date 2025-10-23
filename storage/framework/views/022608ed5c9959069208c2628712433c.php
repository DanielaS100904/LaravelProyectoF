<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
    <div class="container">
        <a class="navbar-brand fw-bold fs-4 text-dark" href="<?php echo e(url('/')); ?>">
            Eterna Joyería
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <!-- Left Side -->
            <ul class="navbar-nav me-auto fw-semibold">
                <li class="nav-item"><a class="nav-link text-dark" href="<?php echo e(route('proveedores.index')); ?>">Proveedores</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="<?php echo e(route('tienda.productos')); ?>">Productos</a></li>
                <li class="nav-item"><a class="nav-link text-dark" href="<?php echo e(route('inventarios.index')); ?>">Inventarios</a></li>
            </ul>

            <!-- Right Side -->
            <ul class="navbar-nav ms-auto align-items-center">

<!-- Hola / Login -->
<?php if(auth()->guard()->guest()): ?>
    <li class="nav-item d-flex align-items-center border-end pe-3 me-3">
        <span class="text-secondary me-1">Hola,</span>
        <a class="fw-bold text-dark text-decoration-none" href="<?php echo e(route('login')); ?>">Inicia sesión</a>
    </li>
<?php else: ?>
    <li class="nav-item d-flex align-items-center border-end pe-3 me-3">
        <span class="text-secondary me-1">Hola,</span>

        <a class="fw-bold text-dark text-decoration-none" href="#"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <?php echo e(Auth::user()->name); ?>

        </a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
            <?php echo csrf_field(); ?>
        </form>
    </li>
<?php endif; ?>

<!-- Mis compras -->
<li class="nav-item border-end pe-3 me-3">
    <a class="nav-link fw-semibold d-flex align-items-center text-dark" href="<?php echo e(route('compras.index')); ?>">
        <i class="bi bi-bag-heart me-1 fs-5 text-secondary"></i>
        Mis compras
    </a>
</li>

                <!-- Carrito -->
                <li class="nav-item position-relative">
                    <a class="nav-link fw-semibold d-flex align-items-center text-dark" href="<?php echo e(route('carrito.index')); ?>">
                        <i class="bi bi-cart3 fs-4 text-secondary"></i>
                        <span class="ms-1">Carrito</span>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger px-2 py-1">
                            <?php echo e(session('carrito') ? count(session('carrito')) : 0); ?>

                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>

</html><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/layouts/app.blade.php ENDPATH**/ ?>