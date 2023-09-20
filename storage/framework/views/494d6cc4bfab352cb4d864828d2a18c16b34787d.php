<?php $__env->startSection('tabContent'); ?>
    
<div id="app">
    <control-informes
        :proyecto=<?php echo json_encode((Object)['idproy_proyecto'=>$proyecto->idproy_proyecto]); ?>

    >
    
    </control-informes>
</div>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/informes.js')); ?>"></script>
<script src="https://unpkg.com/pure-md5@0.1.9/lib/index.js"></script>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('style'); ?>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
    <!-- Styles -->
<link href="<?php echo e(mix('css/gastos.css')); ?>" rel="stylesheet">
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.proyectos.tab_edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\proyectos\informes\informes.blade.php ENDPATH**/ ?>