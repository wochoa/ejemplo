<?php $__env->startSection('titulo'); ?><?php echo e('Heramientas'); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('panelContent'); ?>
<div style="margin: 30px">
    <h2>
        <a href="<?php echo e(route('proyectos.herramientas.{anio}.certificar.index',[2018])); ?>" class="btn btn-lg btn-primary">Ficha de Certificacion</a>
    </h2>
    <h2>
        <a href="<?php echo e(route('proyectos.herramientas.documento.{an}.index',[2018])); ?>" class="btn btn-lg btn-primary">Documentos</a>
    </h2>
    <h2>
        <a href="<?php echo e(route('proyectos.herramientas.{anio}.modificar.index',[2018])); ?>" class="btn btn-lg btn-primary">Nota Modificatoria</a>
    </h2>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.proyectos.panel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\herramientas\index.blade.php ENDPATH**/ ?>