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
    <link rel="stylesheet" href="<?php echo e(mix('css/styles.css')); ?>">

</head>
<body>
    <header id="expediente">
        <exter-mesa-partes-virtual
            titulo="<?php echo e(env('TITULO_PAGINA')); ?>"
            route-persona-dni="<?php echo e(route('tramite.persona.dni','%s')); ?>"
            route-webservice-ruc="<?php echo e(route('tramite.persona.ruc','%s')); ?>"
            route-guardar-documento="<?php echo e(route('tramite.documento.virtual')); ?>"
            :limit='<?php echo e(env("PAGINATION_LIMIT")); ?>'
            :persona='<?php echo e(env("PERSONA_NATURAL")); ?>'
            :empresa='<?php echo e(env("OTRAS_EMPRESAS")); ?>'
        >

        </exter-mesa-partes-virtual>
        <!-- <div class="alert alert-danger">Pagina en mantenimiento, disculpe la molestia ... El servicio será repuesto a la brevedad posible
        </div> -->
    </header>
    <script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>"></script>
    <script src="<?php echo e(mix('js/manifest.js')); ?>"></script>
    <script src="<?php echo e(mix('js/vendor.js')); ?>"></script>
    <script src="<?php echo e(mix('js/expediente.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\sgd\resources\views/tramite/tramiteVarios/mesaPartesVirtual.blade.php ENDPATH**/ ?>