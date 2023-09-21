<?php $__env->startSection('titulo'); ?>
    Nuevo|Dependencias
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid" id="app">
    <div class="row">
        <div class="col-sm-12">
            
            <admin-dependencia-nuevo
                route-dependencia="<?php echo e(route('tramite.dependencias.index')); ?>"
                route-guardar="<?php echo e(route('tramite.dependencias.store')); ?>"
                route-get-dependencia="<?php echo e(route('tramite.dependencias.show','%s')); ?>"                
                :tipo="<?php echo 2; ?>"
                :dependencia-sede='<?php echo $dependencia; ?>'
                :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            >
            </admin-dependencia-nuevo>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/dependencias.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/administracion/dependenciasSedes.blade.php ENDPATH**/ ?>