

<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<div class="container py-5 text-center">
    <h1 class="mb-4 text-success">¡Pedido confirmado!</h1>

    <p class="lead mb-4">
        Gracias <strong><?php echo e($pedido['cliente']['nombre']); ?></strong> por tu compra.<br>
        Hemos enviado la confirmación a <strong><?php echo e($pedido['cliente']['email']); ?></strong>.
    </p>

    <div class="card mx-auto mb-4" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title mb-3">Detalles del pedido</h5>
            <ul class="list-group mb-3">
                <?php $__currentLoopData = $pedido['productos']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?php echo e($item['nombre']); ?> (x<?php echo e($item['cantidad']); ?>)
                        <span>$<?php echo e(number_format($item['subtotal'], 2)); ?></span>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between">
                    <strong>Total</strong>
                    <strong>$<?php echo e(number_format($pedido['total'], 2)); ?></strong>
                </li>
            </ul>
        </div>
    </div>

    <a href="<?php echo e(route('tienda.productos')); ?>" class="btn btn-primary">Seguir comprando</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/confirmacion.blade.php ENDPATH**/ ?>