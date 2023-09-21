<?php $__env->startSection('titulo'); ?>
    Nuevo|Dependencias
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid" id="app">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/tramite/administrador/dependencias" tag="li"><a href="">Explorar Dependencia</a></router-link>
                    <router-link to="/tramite/administrador/dependencias/create" tag="li" v-if="this.$route.name != 'AdminDependenciaEdit'"><a href="">Nueva Dependencia</a></router-link>
                    <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'AdminDependenciaEdit'"><a href="">Editar Dependencia</a></router-link>
                </ul>
            </div>
            <router-view
                route-dependencia="<?php echo e(route('tramite.dependencias.index')); ?>"
                route-guardar="<?php echo e(route('tramite.dependencias.store')); ?>"
                route-get-dependencia="<?php echo e(route('tramite.dependencias.show','%s')); ?>"                
                :tipo="<?php echo 1; ?>"
                :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            ></router-view>
            
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/dependencias.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/administracion/dependencias.blade.php ENDPATH**/ ?>