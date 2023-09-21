<?php $__env->startSection('titulo'); ?>
    Documentos|Por Recibir
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="panel-group">
                    <div class="panel panel-primary">
                        <div class="panel-heading">DOCUMENTOS POR RECIBIR</div>
                        <div class="panel-body">
                           <docu-recibir
                           route-recibir="<?php echo e(route('tramite.documento.porRecibir')); ?>"
                           route-recepcionar="<?php echo e(route('tramite.documento.recepcionar')); ?>"
                           route-print-pdf="<?php echo e(route('tramite.documento.printPdf','%s')); ?>"
                           route-usuarios-dependencia="<?php echo e(route('tramite.usuarios.obtenerUserDependenciaActivo')); ?>?tipo=2"
                           :user='<?php echo Auth::user()->id; ?>'
                           :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                           >
                           </docu-recibir>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/porrecibir.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/documentos/porrecibir.blade.php ENDPATH**/ ?>