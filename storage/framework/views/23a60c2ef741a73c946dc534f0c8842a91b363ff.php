 
<?php $__env->startSection('titulo'); ?> Cambiar| Contraseña
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('contenido'); ?>

<div class="container" id="app">
        <admin-cambiar-contrasenia
            route-inicio="<?php echo e(route('tramite.inicio')); ?>"
            route-user="<?php echo e(route('tramite.usuarios.cambiarContrasenia')); ?>"
            route-principal="<?php echo e(route('principal')); ?>"
            route-webservice-dni="<?php echo e(route('tramite.persona.dni','%s')); ?>"
            :user='<?php echo e($user); ?>'
            :tipo='<?php echo 2; ?>'
        >
        </admin-cambiar-contrasenia>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/usuarios.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\tramiteVarios\cambiarContrasenia.blade.php ENDPATH**/ ?>