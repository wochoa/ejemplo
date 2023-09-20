<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation">
        <a href="<?php echo route('proyectos.herramientas.index'); ?>">Herramientas</a>
    </li>
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.{anio}.certificar.index')? 'class=active':null); ?>>
        <a href="<?php echo route('proyectos.herramientas.{anio}.certificar.index',[$anio]); ?>">Doc. Certificaci&oacute;n</a>
    </li>
    <?php if(Route::currentRouteName()=='proyectos.herramientas.certificar.solicitud.index'||Route::currentRouteName()=='proyectos.herramientas.certificar.detalle.index'): ?>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.certificar.solicitud.index')? 'class=active':null); ?> data-data="<?php echo e(Route::currentRouteName()); ?>">
            <a href="<?php echo route('proyectos.herramientas.certificar.solicitud.index', [$anio,$doc]); ?>">Certificados</a>
        </li>
    <?php endif; ?>
    <?php if(Route::currentRouteName()=='proyectos.herramientas.certificar.detalle.index'): ?>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.herramientas.certificar.detalle.index')? 'class=active':null); ?> data-data="<?php echo e(Route::currentRouteName()); ?>">
            <a href="#">Detalle</a>
        </li>
    <?php endif; ?>
</ul>

<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\herramientas\tab_documento.blade.php ENDPATH**/ ?>