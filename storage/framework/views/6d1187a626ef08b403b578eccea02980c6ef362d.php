<?php $__env->startSection('titulo'); ?>
    Nuevo| Unidades Orgánicas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <ul class="nav nav-tabs card-header-tabs">
                        <router-link to="/tramite/administrador/unidades" tag="li"><a href="">Explorar Unidades Orgánicas</a></router-link>
                        <router-link to="/tramite/administrador/unidades/create" tag="li" v-if="this.$route.name != 'AdminUnidadOrganicaEdit'">
                            <a href="">Nuevo Unidad Orgánica</a></router-link>
                        <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'AdminUnidadOrganicaEdit'">
                            <a href="">Editar Unidad Orgánica</a></router-link>
                    </ul>
                </div>
                <router-view
                    route-unidad="<?php echo e(route('tramite.unidades.index')); ?>"
                    route-guardar="<?php echo e(route('tramite.unidades.store')); ?>"
                    route-get-unidad="<?php echo e(route('tramite.unidades.show','%s')); ?>"
                    route-webservice-dni="<?php echo e(env('DNI_WEBSERVICE')); ?>"
                    :tipo="<?php echo 1; ?>"
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                >
                </router-view>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/unidad.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\administracion\unidadesOrganicas.blade.php ENDPATH**/ ?>