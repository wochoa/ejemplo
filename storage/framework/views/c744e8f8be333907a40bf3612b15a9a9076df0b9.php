<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation">
        <a href="<?php echo route('proyectos.herramientas.index'); ?>">Herramientas</a>
    </li>
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.{anio}.modificar.index')? 'class=active':null); ?>>
        <a href="<?php echo route('proyectos.herramientas.{anio}.modificar.index',[$anio]); ?>">Modificatorias</a>
    </li>
    <?php if(Route::currentRouteName()=='proyectos.herramientas.modif.det.index'): ?>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.modif.det.index')? 'class=active':null); ?>>
            <a href="">Detalle</a>
        </li>
    <?php endif; ?>
</ul>

<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.full_screen', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\herramientas\tab_modificar.blade.php ENDPATH**/ ?>