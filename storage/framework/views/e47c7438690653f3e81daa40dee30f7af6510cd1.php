<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.certificar.index')? 'class=active':null); ?> data-data="<?php echo e(Route::currentRouteName()); ?>">
        <a href="<?php echo route('proyectos.herramientas.certificar.index',['proy'=>$proy,'anio'=>$anio]); ?>">Certificados</a>
    </li>
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.certificar.list')? 'class=active':null); ?>>
        <a href="<?php echo route('proyectos.herramientas.certificar.list',['proy'=>$proy,'anio'=>$anio]); ?>">Solicitudes</a>
    </li>
</ul>

<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\herramientas\tab_certificar.blade.php ENDPATH**/ ?>