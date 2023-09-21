<?php $__env->startSection('titulo'); ?> Buscar
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('contenido'); ?>
    <buscador-doc
    route-user="<?php echo e(route('tramite.usuarios.obtenerUserDependenciaActivo')); ?>?tipo=4"
    route-buscar-doc="<?php echo e(route('tramite.buscar.index')); ?>"
    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
    >
    </buscador-doc>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/buscar.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/buscar/documentos.blade.php ENDPATH**/ ?>