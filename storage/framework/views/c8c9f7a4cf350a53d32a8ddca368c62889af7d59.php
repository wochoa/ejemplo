<?php $__env->startSection('titulo'); ?>
    Nuevo| Forma Recepción
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container" id="app">
        <cata-recepcion
            route-recepcion="<?php echo e(route('tramite.recepciones.index')); ?>"
        >
        </cata-recepcion>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/prioridades.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\catalogos\formarecepcion.blade.php ENDPATH**/ ?>