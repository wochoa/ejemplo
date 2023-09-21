<?php $__env->startSection('titulo'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div id="inicio" class="TramiteInicio">
        
        <?php
        
        $routes=[
            'tramite.enproceso.index'           =>(Object)['route'=>route('tramite.enproceso.index')],
            'tramite.recibir.index'             =>(Object)['route'=>route('tramite.recibir.index')],
            'tramite.archivado.index'           =>(Object)['route'=>route('tramite.archivado.index')],
            'tramite.view.plantilla'            =>(Object)['route'=>route('tramite.view.plantilla')],
            'tramite.view.docs.generados'       =>(Object)['route'=>route('tramite.view.docs.generados')],
            'tramite.buscador'                  =>(Object)['route'=>route('tramite.buscador')],
            'tramite.cambiarContrasenia'        =>(Object)['route'=>route('tramite.cambiarContrasenia')],
        ];
        ?>
        <tramite-inicio :routes="<?php echo e(json_encode($routes)); ?>" />
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/inicio.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/home.blade.php ENDPATH**/ ?>