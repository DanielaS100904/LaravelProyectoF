

<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="text-center mb-4">Tu Carrito de Compras</h1>

    <?php if(session('success')): ?>
        <div class="alert alert-success text-center"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <?php if(count($carrito) > 0): ?>
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
                <?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td>
                            <?php if($item['imagen']): ?>
                                <img src="<?php echo e(asset('storage/' . $item['imagen'])); ?>" width="70" alt="<?php echo e($item['nombre']); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('images/no-image.jpg')); ?>" width="70" alt="Sin imagen">
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($item['nombre']); ?></td>
                        <td>$<?php echo e(number_format($item['precio'], 2)); ?></td>
                        <td><?php echo e($item['cantidad']); ?></td>
                        <td>$<?php echo e(number_format($item['subtotal'], 2)); ?></td>
                        <td>
                            <a href="<?php echo e(route('carrito.eliminar', $item['id'])); ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="text-end">
            <h4>Total: <strong>$<?php echo e(number_format($total, 2)); ?></strong></h4>
            <a href="<?php echo e(route('carrito.vaciar')); ?>" class="btn btn-outline-danger mt-3">Vaciar carrito</a>
<a href="<?php echo e(route('checkout.form')); ?>" class="btn btn-success mt-3">Proceder al pago</a>

        </div>
    <?php else: ?>
        <p class="text-center text-muted">Tu carrito está vacío.</p>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/carrito.blade.php ENDPATH**/ ?>