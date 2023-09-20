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
	<link rel="stylesheet" href="<?php echo e(asset('vendor/metisMenu/metisMenu.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/sb-admin-2.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendor/morrisjs/morris.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/jquery.dataTables.min.css')); ?>">
	<?php echo $__env->yieldPushContent('style'); ?>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body style="overflow-x: hidden;">
<header>
	<?php echo $__env->yieldContent('header'); ?>

</header>
	<div id="page" style="margin-left: 15px;"><?php echo $__env->yieldContent('content'); ?></div>

	<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/metisMenu/metisMenu.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/raphael/raphael.min.js')); ?>"></script>
	<script src="<?php echo e(asset('vendor/morrisjs/morris.js')); ?>"></script>
	<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\proyectos\dashboard.blade.php ENDPATH**/ ?>