<?php $__env->startSection('content'); ?>
    
<div id="app">

      <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" >
                  <a href=<?php echo route('proyectos.contratos',[$idproyecto]); ?>>Listado de contratos</a>
            </li>
            <router-link :to="{name:'controlActividades',params:{idproyecto:<?php echo e($idproyecto); ?>,idcontrato:<?php echo e($idcontrato); ?>}}" tag="li" ><a href="#">Actividades adicionales</a></router-link>
            <router-link :to="{name:'controlValorizaciones',params:{idproyecto:<?php echo e($idproyecto); ?>,idcontrato:<?php echo e($idcontrato); ?>}}" tag="li" ><a href="#">Control de avance</a></router-link>
            <router-link :to="{name:'controlPlazo',params:{idproyecto:<?php echo e($idproyecto); ?>,idcontrato:<?php echo e($idcontrato); ?>}}" tag="li" ><a href="#">Control de plazos</a></router-link>
            <router-link :to="{name:'controlAlcance',params:{idproyecto:<?php echo e($idproyecto); ?>,idcontrato:<?php echo e($idcontrato); ?>}}" tag="li" ><a href="#">Control de alcance</a></router-link>
      </ul>
      <router-view
            route-obtener-actividad="<?php echo e(route('actividades.index')); ?>"
            route-guardar-actividad="<?php echo e(route('actividades.store')); ?>"
            route-get-actividad="<?php echo e(route('actividades.show','%s')); ?>"
            route-adicional-obra="<?php echo e(route('actividades.obtenerAdicionalObra')); ?>"
            :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            :contrato=<?php echo json_encode((Object)['idobra'=>$idcontrato]); ?>

      >
      
      </router-view>
</div>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/actividades.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.proyectos.plantilla_proyectos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\actividad\actividad.blade.php ENDPATH**/ ?>