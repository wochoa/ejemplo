<?php $__env->startSection('tabContent'); ?>
    
<div id="app">
      <control-contratos
                route-obtener-contrato="<?php echo e(route('contratos.index')); ?>"
                route-guardar-contrato="<?php echo e(route('contratos.store')); ?>"
                route-actividades="<?php echo e(route('proyectos.contratos.actividadObra',[$proyecto->idproy_proyecto,'%s'])); ?>"
                :proyecto=<?php echo json_encode((Object)['idproy_proyecto'=>$proyecto->idproy_proyecto]); ?>

      >
      </control-contratos>
</div>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/contratos.js')); ?>"></script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.proyectos.tab_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\proyecto\contratos.blade.php ENDPATH**/ ?>