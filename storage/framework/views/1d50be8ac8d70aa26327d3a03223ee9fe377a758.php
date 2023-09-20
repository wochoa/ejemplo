<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
    <link rel="icon" type="image/png" href="/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php $__env->startSection('titulo'); ?>
            <?php echo e(env("TITULO_PAGINA")); ?>

            <?php echo $__env->yieldSection(); ?>
        </title>
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/estilos.css')); ?>">
</head>
<body>
    <header id="expediente">
        <buscar-digitales
            titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
            route-print-pdf="<?php echo e(route('tramite.documento.printPdf','documento.pdf')); ?>?id=%s&id_documento=%s"
            route-buscar-digital="<?php echo e(route('tramite.documento.buscarDocDigital')); ?>"
        >
        
        </buscar-digitales>
    </header>
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
<script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
<script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
<script src="<?php echo e(mix('js/expediente.js')); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\tramite\buscar\buscarDigital.blade.php ENDPATH**/ ?>