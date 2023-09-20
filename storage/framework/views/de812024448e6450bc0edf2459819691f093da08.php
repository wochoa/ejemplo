<?php $__env->startSection('titulo'); ?> Autorizar|Papeleta
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/tramite/papeleta/papeletasAutorizadas" tag="li"><a href="">Papeletas autorizadas</a></router-link>
                    <router-link to="/tramite/papeleta/papeletaPendiente" tag="li"><a href="">Papeletas para autorizar</a></router-link>
                </ul>
            </div>
            <router-view
                    route-autorizar-papeleta="<?php echo e(route('tramite.papeletas.autorizarPapeletas')); ?>"
                    route-papeletas-autorizadas="<?php echo e(route('tramite.papeletas.papeletasAutorizadas')); ?>"
                    route-recursos-humanos="<?php echo e(route('tramite.papeletas.obtenerDependenciaRecursosHumanos')); ?>"
                    route-recepcionar="<?php echo e(route('tramite.documento.recepcionar')); ?>"
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                    :tipo-doc-papeleta='<?php echo e(env("TIPO_DOC_PAPELETA")); ?>'
            >
            </router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/papeleta.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\tramiteVarios\autorizarPapeleta.blade.php ENDPATH**/ ?>