<?php $__env->startSection('titulo'); ?> Roles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <ul class="nav nav-tabs card-header-tabs">
                    <router-link to="/administrador/roles" tag="li"><a href="">Explorar Roles</a></router-link>
                    <router-link to="/administrador/roles/create" tag="li" v-if="this.$route.name != 'editRol'"><a href="">Nuevo rol</a></router-link>
                    <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'editRol'"><a href="">Editar rol</a></router-link>
                </ul>
            </div>
            <router-view
            route-roles="<?php echo e(route('administrador.rol.index')); ?>"
            route-guardar="<?php echo e(route('administrador.rol.store')); ?>"
            route-get-rol="<?php echo e(route('administrador.rol.show','%s')); ?>"
            >
            </router-view>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/admin.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/administrador/roles.blade.php ENDPATH**/ ?>