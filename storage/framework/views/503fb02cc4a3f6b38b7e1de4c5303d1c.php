

<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="text-center mb-4">Procesar Pago</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="<?php echo e(route('checkout.procesar')); ?>" method="POST" class="card p-4 shadow-sm">
                <?php echo csrf_field(); ?>
                <h4 class="mb-3">Datos del Cliente</h4>

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre completo</label>
                    <input type="text" name="nombre" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección de envío</label>
                    <input type="text" name="direccion" class="form-control" required>
                </div>

                <h5 class="mt-4 mb-3">Resumen del pedido</h5>
                <ul class="list-group mb-3">
                    <?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <?php echo e($item['nombre']); ?> (x<?php echo e($item['cantidad']); ?>)
                            <span>$<?php echo e(number_format($item['subtotal'], 2)); ?></span>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between">
                        <strong>Total</strong>
                        <strong>$<?php echo e(number_format($total, 2)); ?></strong>
                    </li>
                </ul>

                <div class="text-end">
                    <a href="<?php echo e(route('carrito.index')); ?>" class="btn btn-outline-secondary">Volver al carrito</a>
                    <button type="submit" class="btn btn-success">Confirmar pedido</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/checkout.blade.php ENDPATH**/ ?>