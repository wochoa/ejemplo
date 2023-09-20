<?php $__env->startSection('content'); ?>

<div class="container">
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" >
            <a href="<?php echo route('proyectos.index'); ?>">Listado de Proyecto</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.edit')? 'class=active':null); ?>>
            <a href="<?php echo route('proyectos.edit',[$proyecto->idproy_proyecto]); ?>">Administrar proyecto</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.gastos')? 'class=active':null); ?>>
            <a href="<?php echo e(route('proyectos.gastos',[$proyecto->idproy_proyecto,'default'] )); ?>">Gastos</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.{proy}.plan.componente.index')? 'class=active':null); ?>>
            <a href="<?php echo e(route('proyectos.{proy}.plan.componente.index',$proyecto->idproy_proyecto )); ?>">Componentes Tareas</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.plan.programar.index')? 'class=active':null); ?>>
            <a href="<?php echo e(route('proyectos.plan.programar.index', [$proyecto->idproy_proyecto , (isset($selectedAnio))?$selectedAnio:'null',1,'00'])); ?>" da>Programar</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.contratos')? 'class=active':null); ?>>
            <a href="<?php echo route('proyectos.contratos',$proyecto->idproy_proyecto); ?>">Contratos</a>
        </li>
        <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.informes')? 'class=active':null); ?>>
            <a href="<?php echo route('proyectos.informes',$proyecto->idproy_proyecto); ?>">Informes</a>
        </li>
    </ul>
</div>
<div class=" <?php echo e((in_array(Route::currentRouteName(), ['proyectos.plan.programar.index','proyectos.gastos']))? null:'container '); ?>">
<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\tab_edit.blade.php ENDPATH**/ ?>