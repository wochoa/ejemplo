<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
	<?php $__env->startSection('titulo'); ?>
	<?php echo e(env("TITULO_PAGINA")); ?>

	<?php echo $__env->yieldSection(); ?>
	</title>

	<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
	<base href="<?php echo e(route('principal')); ?>">
</head>
<body>
    <header id="navbar">
        <?php
            $auth=['guest'=>Auth::guest()];
        ?>
        <buscar-modal
        route-documento="<?php echo e(route('tramite.documento.buscarDocumento')); ?>"
        route-expediente="<?php echo e(route('tramite.buscar.buscarExpedienteModal','%s')); ?>"
        :auth='<?php echo json_encode($auth); ?>'
        :form-data='<?php echo json_encode((Object)['iddocumento'=>$iddocumento]); ?>'
        >

        </buscar-modal>
    </header>

    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
	<script src="<?php echo e(mix('js/navbar.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\buscar\verDocumentoModal.blade.php ENDPATH**/ ?>