<?php $__env->startSection('titulo'); ?> Dias Feriado
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <administrador-holidays></administrador-holidays>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type='text/javascript' src="<?php echo e(mix('js/admin.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.plantillaAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/administrador/holidays.blade.php ENDPATH**/ ?>