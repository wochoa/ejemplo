<?php $__env->startSection('titulo'); ?><?php echo e($proyecto->proy_cod_siaf.' Analitico de Gastos ('.$proyecto->proy_nombre.')'); ?><?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('proyectos.analitico.analitico', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_black ', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\analitico\analitico2.blade.php ENDPATH**/ ?>