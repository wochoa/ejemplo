<?php $__env->startSection('titulo'); ?>
    Nuevo| Tipo Prioridad
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container" id="app">
        <cata-prioridades
            route-prioridad="<?php echo e(route('tramite.prioridades.index')); ?>"
        >
        </cata-prioridades>                   
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/prioridades.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\catalogos\tipoprioridad.blade.php ENDPATH**/ ?>