<?php $__env->startSection('content'); ?>



<div class="panel panel-default">
    <?php echo $__env->yieldContent('panelContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\panel.blade.php ENDPATH**/ ?>