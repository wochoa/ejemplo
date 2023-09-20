<?php $__env->startSection('titulo'); ?> Roles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <administrador-correo></administrador-correo>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type='text/javascript' src="<?php echo e(mix('js/admin.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.plantillaAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\administrador\correos.blade.php ENDPATH**/ ?>