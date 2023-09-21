<?php $__env->startSection('titulo'); ?>
    Nuevo| Archivador
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="container">
                    <ul class="nav nav-tabs card-header-tabs">
                        <router-link to="/tramite/catalogo/archivador" tag="li"><a href="">Explorar Archivador</a></router-link>
                        <router-link to="/tramite/catalogo/archivador/create" tag="li" v-if="this.$route.name != 'CataArchivadorEdit'"><a href="">Nuevo Archivador</a></router-link>
                        <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'CataArchivadorEdit'"><a href="">Editar Archivador</a></router-link>
                    </ul>
                </div>
                
                <router-view
                    route-archivador="<?php echo e(route('tramite.archivador.index')); ?>"
                    route-guardar="<?php echo e(route('tramite.archivador.store')); ?>"
                    route-get-archivador="<?php echo e(route('tramite.archivador.show','%s')); ?>"
                    :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                >
                </router-view>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/archivadores.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/catalogos/archivador.blade.php ENDPATH**/ ?>