<?php $__env->startSection('titulo'); ?>
    Nuevo| Entidades Externas
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--tapmenu-->
                <div class="container">
                    <ul class="nav nav-tabs card-header-tabs">
                        <router-link to="/tramite/administrador/entidades" tag="li"><a href="">Explorar Entidades</a></router-link>
                        <router-link to="/tramite/administrador/entidades/create" tag="li" v-if="this.$route.name != 'AdminEntidadExternaEdit'"><a href="">Nuevo Entidad</a></router-link>
                        <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'AdminEntidadExternaEdit'"><a href="">Editar Entidad</a></router-link>
                    </ul>
                </div>
                <!--fintapmenu-->
                <router-view 
                  route-entidades="<?php echo e(route('tramite.entidades.index')); ?>"
                  route-guardar="<?php echo e(route('tramite.entidades.store')); ?>"
                  route-get-entidad="<?php echo e(route('tramite.entidades.show','%s')); ?>"
                  :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
                  >
                </router-view>
              
            </div>
        </div>
    </div>
      
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/entidad.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/administracion/entidades-externas.blade.php ENDPATH**/ ?>