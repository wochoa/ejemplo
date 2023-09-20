<?php $__env->startSection('titulo'); ?> Recepcion|Documento
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div  class="container" id="app">
   <recepcion-documento
         route-guardar-documento="<?php echo e(route('tramite.documento.store')); ?>"
         now="<?php echo e(date('Y-m-d')); ?>"
         user-id='<?php echo Auth::user()->id; ?>'
         user-dependencia='<?php echo Auth::user()->depe_id; ?>'
         >

   </recepcion-documento>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/recepcion.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\tramiteVarios\recepcionDocumento.blade.php ENDPATH**/ ?>