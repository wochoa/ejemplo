<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>
        <?php $__env->startSection('titulo'); ?> Gobierno Regional Huánuco <?php echo $__env->yieldSection(); ?>
    </title>

    <!--MENSAJE ALERTA-->


    <!--FIN MENSAJE ALERTA-->

    <?php echo $__env->make('tramite.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
    <?php echo $__env->make('tramite.scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <!--HEADER-->
    <header>
        <!--<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="collapse navbar-collapse" id="navegacion-fm">
                    <ul class="nav navbar-nav">
                    </ul>
                </div>
            </div>
        </nav>-->
    </header>
    <!--FIN  HEADER-->

    <!--<section class="jumbotron">
        <h3>DOCUMENTOS GENERADOS POR UNIDAD ORGANICA</h3>
    </section>-->

    <!--CONTENIDO-->
    <?php echo $__env->yieldContent('contenido'); ?>



</body>

</html><?php /**PATH C:\xampp\htdocs\sgd\resources\views\layouts\plantillaReporte.blade.php ENDPATH**/ ?>