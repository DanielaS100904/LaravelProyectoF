<div class="row padding-1 p-1">
    <div class="col-md-12">

        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label"><?php echo e(__('Nombre')); ?></label>
            <input type="text" name="nombre" class="form-control <?php $__errorArgs = ['nombre'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('nombre', $producto?->nombre)); ?>" id="nombre" placeholder="Nombre">
            <?php echo $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label"><?php echo e(__('Descripcion')); ?></label>
            <input type="text" name="descripcion" class="form-control <?php $__errorArgs = ['descripcion'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('descripcion', $producto?->descripcion)); ?>" id="descripcion" placeholder="Descripcion">
            <?php echo $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label"><?php echo e(__('Precio')); ?></label>
            <input type="text" name="precio" class="form-control <?php $__errorArgs = ['precio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                value="<?php echo e(old('precio', $producto?->precio)); ?>" id="precio" placeholder="Precio">
            <?php echo $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>'); ?>

        </div>

        <div class="form-group mb-2 mb20">
            <label for="proveedor_id">Proveedor</label>
            <select name="proveedor_id" id="proveedor_id" class="form-control" required>
                <option value="">Seleccione un proveedor</option>
                <?php $__currentLoopData = $proveedores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proveedor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($proveedor->id); ?>" <?php echo e((isset($producto) && $producto->proveedor_id == $proveedor->id) ? 'selected' : ''); ?>>
                        <?php echo e($proveedor->nombre); ?> <!-- Cambia 'nombre' por el campo real del proveedor -->
                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['proveedor_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span class="text-danger"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

    </div>

    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary"><?php echo e(__('Submit')); ?></button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\LaravelProyecto\resources\views/producto/form.blade.php ENDPATH**/ ?>