<?php $__env->startSection('titulo'); ?>
    Reporte
<?php $__env->stopSection(); ?>

<?php $__env->startSection('estilo'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('estilo'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('contenido'); ?>
    <div class="container">
        
        
        <div class="panel-group">
            <div class="panel panel-primary">
                <div class="panel-heading">REPORTES</div>
                <div class="panel-body">
                <buscar-reporte
                route-user="<?php echo e(route('tramite.usuarios.obtenerUserDependenciaActivo')); ?>?tipo=4"
                route-archivador="<?php echo e(route('tramite.archivador.obtenerArchivadores')); ?>?tipo=3"
                route-reporte="<?php echo e(route('tramite.reporte.obtenerReporte')); ?>"
                titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
                :opciones='<?php echo json_encode($opciones); ?>'
                :tipo='<?php echo 1; ?>'
                >
                </buscar-reporte>
                </div>
            </div> 
        </div>
    
       
    </div> 

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script type='text/javascript' src="<?php echo e(mix('js/reporte.js')); ?>"></script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.plantillaVue', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\reportes\reporte.blade.php ENDPATH**/ ?>