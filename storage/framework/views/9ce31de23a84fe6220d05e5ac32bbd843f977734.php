<?php $__env->startSection('titulo'); ?>
    Nuevo| Correlativos
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="container" id="app">
        <admin-correlativo
            route-correlativo="<?php echo e(route('tramite.correlativos.index')); ?>"
            route-user="<?php echo e(route('tramite.usuarios.obtenerUserDependenciaActivo')); ?>?tipo=4"
            route-update="<?php echo e(route('tramite.correlativos.update','%s')); ?>" 
            :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            :tipo-correlativos='<?php echo 2; ?>'
        >
        </admin-correlativo>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/correlativos.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\administracion\correlativosDependencia.blade.php ENDPATH**/ ?>