<?php $__env->startSection('titulo'); ?> Publicaciones
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/administrador/publicaciones" tag="li"><a href="">Explorar Publicaciones</a></router-link>
                    <router-link to="/administrador/publicaciones/create" tag="li" v-if="this.$route.name != 'editComunicacionInterna'"><a href="">Nueva Publicación</a></router-link>
                    <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'editComunicacionInterna'"><a href="">Editar Publicación</a></router-link>
                </ul>
            </div>
            <router-view
                route-publicacion="<?php echo e(route('administrador.comunicacionIntena.index')); ?>"
                route-guardar="<?php echo e(route('administrador.comunicacionIntena.store')); ?>"
                route-get-publicacion="<?php echo e(route('administrador.comunicacionIntena.show','%s')); ?>"
                route-print-imagenes="<?php echo e(route('administrador.comunicacionIntena.printImagenes','%s')); ?>"
                user-id='<?php echo Auth::user()->id; ?>'
                :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            >
            
            </router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/admin.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.plantillaAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/administrador/comunicacionInterna.blade.php ENDPATH**/ ?>