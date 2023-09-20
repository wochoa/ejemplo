<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.modif.buscar')? 'class=active':null); ?>>
        <a href="<?php echo route('proyectos.herramientas.modif.buscar',[$anio]); ?>">Modificatorias</a>
    </li>
</ul>
<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\herramientas\tab_buscar.blade.php ENDPATH**/ ?>