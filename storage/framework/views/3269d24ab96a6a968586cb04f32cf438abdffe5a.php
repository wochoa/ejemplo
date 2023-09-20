<?php $__env->startSection('content'); ?>

<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" >
    <a href=<?php echo route('proyectos.contratos',['proyecto'=>$idproyecto]); ?>>
    Listado de contratos</a>
    </li>
    <li role="presentation" <?php echo e((Route::currentRouteName()=='proyectos.contratos.actividadObra')? 'class=active':null); ?>>
        <a href=<?php echo route('proyectos.contratos.actividadObra',['proyecto'=>$idproyecto,'contrato'=>$idcontrato]); ?>>
        Actividades adicionales (Condiciones Previas)</a>
       
    </li>
    <li role="presentation" >
        <a href="">Control de avance</a>
    </li>
    <li role="presentation" >
        <a href="">Control de plazos</a>
    </li>
    <li role="presentation" >
        <a href="">Control de alcance</a>
    </li>
    
</ul>

<div class="panel panel-default">
    <?php echo $__env->yieldContent('tabContent'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\tab_actividad.blade.php ENDPATH**/ ?>