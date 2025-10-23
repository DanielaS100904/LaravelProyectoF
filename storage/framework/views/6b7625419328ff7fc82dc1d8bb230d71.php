

<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1><?php echo e($producto->nombre); ?></h1>
    <p><strong>Precio:</strong> $<?php echo e($producto->precio); ?></p>
    <p><strong>Descripción:</strong> <?php echo e($producto->descripcion); ?></p>

    <a href="<?php echo e(route('tienda.productos')); ?>" class="btn btn-secondary mt-3">Volver</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/detalle.blade.php ENDPATH**/ ?>