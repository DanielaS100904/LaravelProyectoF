

<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h1 class="text-center mb-4">Mis Compras</h1>

    <?php if($compras->isEmpty()): ?>
        <p class="text-center text-muted">Aún no has realizado ninguna compra.</p>
    <?php else: ?>
        <div class="row">
            <?php $__currentLoopData = $compras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $compra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-6 mb-3">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title">Compra #<?php echo e($compra->id); ?></h5>
                            <p class="mb-2">Fecha: <?php echo e($compra->created_at->format('d/m/Y')); ?></p>
                            <p class="mb-2">Total: <strong>$<?php echo e(number_format($compra->total, 2)); ?></strong></p>
                            <a href="#" class="btn btn-outline-secondary btn-sm">Ver detalles</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/joyeria/miscompras.blade.php ENDPATH**/ ?>