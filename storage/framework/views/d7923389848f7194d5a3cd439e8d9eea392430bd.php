<?php $__env->startSection('titulo'); ?> Liberar|Doc. CAS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container" id="app">
    <oper-liberar-doccas
                route-doc-recibir="<?php echo e(route('tramite.documento.bloquedoDocumentoRecibirLiberar')); ?>"
                route-liberar-cas="<?php echo e(route('tramite.documento.liberarDocCas')); ?>"
    >
    </oper-liberar-doccas>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/recepcion.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/tramiteVarios/liberarDocCas.blade.php ENDPATH**/ ?>