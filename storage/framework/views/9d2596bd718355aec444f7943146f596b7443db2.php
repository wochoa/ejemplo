<?php $__env->startSection('titulo'); ?> Nuevo|Usuarios
<?php $__env->stopSection(); ?>
<?php $__env->startSection('contenido'); ?>

<div class="container-fluid">
      <div class="row">
         <div class="col-sm-12">
               <div class="container">
                  <ul class="nav nav-tabs card-header-tabs">
                     <router-link to="/administrador/usuarios" tag="li"><a href="">Explorar Usuarios</a></router-link>
                     <router-link to="/administrador/usuarios/create" tag="li" v-if="this.$route.name != 'AdminUsuarioEdit2'"><a href="">Nuevo Usuario</a></router-link>
                     <router-link :to="this.$route.path" tag="li" v-if="this.$route.name == 'AdminUsuarioEdit2'"><a href="">Editar Usuario</a></router-link>
                  </ul>
               </div>
               <router-view 
                  route-usuario="<?php echo e(route('tramite.usuarios.index')); ?>"
                  route-guardar="<?php echo e(route('tramite.usuarios.store')); ?>"
                  route-get-user="<?php echo e(route('tramite.usuarios.show','%s')); ?>"
                  route-webservice-dni="<?php echo e(env('DNI_WEBSERVICE')); ?>"
                  route-user="<?php echo e(route('tramite.usuarios.cambiarContrasenia')); ?>"
                  :tipo='<?php echo 2; ?>'
                  :tipo-usuarios = "<?php echo 1; ?>"
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
<?php echo $__env->make('layouts.plantillaAdministrador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\administrador\usuariosGeneral.blade.php ENDPATH**/ ?>