<?php $__env->startSection('titulo'); ?> 
    Documentos | Archivados 
<?php $__env->stopSection(); ?> <?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel-group">
                <div class="panel panel-primary">
                    <div class="panel-heading">DOCUMENTOS ARCHIVADOS</div>
                    <docu-archivado
                    route-archivado="<?php echo e(route('tramite.documento.archivados')); ?>"
                    route-devolver="<?php echo e(route('tramite.documento.devolverProceso')); ?>"
                    route-print-pdf="<?php echo e(route('tramite.documento.printPdf','%s')); ?>"
                    route-usuarios-dependencia="<?php echo e(route('tramite.usuarios.obtenerUserDependenciaActivo')); ?>?tipo=3"
                    route-archivadores="<?php echo e(route('tramite.archivador.obtenerArchivadores')); ?>?tipo=2"
                    :usuario='<?php echo Auth::user()->id; ?>'
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                    >
                    </docu-archivado>
                </div>                
                <!--finpanel-->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/archivados.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\documentos\archivados.blade.php ENDPATH**/ ?>