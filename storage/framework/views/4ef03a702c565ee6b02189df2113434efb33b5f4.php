<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 
	<title>
	<?php $__env->startSection('titulo'); ?>
		<?php echo e(env("TITULO_PAGINA")); ?>

	<?php echo $__env->yieldSection(); ?>
	</title>
    
    <!--MENSAJE ALERTA-->
    
    <!--FIN MENSAJE ALERTA-->

	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/jquery.dataTables.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-multiselect.css')); ?>">
	<?php echo $__env->yieldPushContent('style'); ?>
</head>

<body>

		<div class="theme-showcase" role="main">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
	<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/jQuery.print.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap-multiselect.js')); ?>"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

	<!--<script src="<?php echo e(asset('js/jquery.dataTables.min.js')); ?>"></script>-->
	<script src="<?php echo e(asset('js/proy.js?v=0.0.1')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\plantilla_black.blade.php ENDPATH**/ ?>