<?php $__env->startSection('titulo'); ?> Supervisar|Papeleta
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/tramite/papeleta/papeletasUsadas" tag="li"><a href="">Papeletas usadas</a></router-link>
                    <router-link to="/tramite/papeleta/papeletasSolicitadas" tag="li"><a href="">Papeletas solicitadas</a></router-link>
                </ul>
            </div>
            <router-view
                    route-papeletas-solicitadas="<?php echo e(route('tramite.papeletas.papeletasSolicitadas')); ?>"
                    route-papeletas-usadas="<?php echo e(route('tramite.papeletas.papeletasUsadas')); ?>"
                    route-archivador="<?php echo e(route('tramite.papeletas.obtenerArchivador')); ?>"
                    route-recepcionar="<?php echo e(route('tramite.documento.recepcionar')); ?>"
                    route-archivar="<?php echo e(route('tramite.documento.documentoArchivar')); ?>"
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            >
            </router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/supervisarPapeleta.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\tramiteVarios\supervisarPapeleta.blade.php ENDPATH**/ ?>