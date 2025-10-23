

<?php $__env->startSection('content'); ?>

<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<div class="container py-5">
    <h1 class="text-center mb-5">Nuestros Productos</h1>

    <div class="row">
        <?php $__empty_1 = true; $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm border-0">
                    <?php if($producto->imagen): ?>
                        <img src="<?php echo e(asset('storage/' . $producto->imagen)); ?>" 
                             class="card-img-top" 
                             alt="<?php echo e($producto->nombre); ?>"
                             style="height: 220px; object-fit: cover;">
                    <?php else: ?>
                        <img src="<?php echo e(asset('images/no-image.jpg')); ?>" 
                             class="card-img-top" 
                             alt="Sin imagen"
                             style="height: 220px; object-fit: cover;">
                    <?php endif; ?>

                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo e($producto->nombre); ?></h5>
                        <p class="text-muted mb-2">$<?php echo e(number_format($producto->precio, 2)); ?></p>
<a href="<?php echo e(route('tienda.producto', $producto->id)); ?>" class="btn btn-outline-secondary btn-sm mb-2">
    Ver detalles
</a>
<a href="<?php echo e(route('carrito.agregar', $producto->id)); ?>" class="btn btn-primary btn-sm">
    Agregar al carrito
</a>

                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <div class="col-12 text-center">
                <p class="text-muted">No hay productos disponibles en este momento.</p>
            </div>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/productos.blade.php ENDPATH**/ ?>